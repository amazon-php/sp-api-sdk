<?php

declare(strict_types=1);

namespace AmazonPHP\Rector\ClassMethod;

use AmazonPHP\Rector\ValueObject\NullableReturnTypeDeclaration;
use PhpParser\Node;
use PhpParser\Node\Stmt\ClassMethod;
use PHPStan\Type\NullType;
use PHPStan\Type\UnionType;
use Rector\Core\Contract\Rector\ConfigurableRectorInterface;
use Rector\Core\Rector\AbstractRector;
use Rector\PHPStanStaticTypeMapper\Enum\TypeKind;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\ConfiguredCodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;
use Webmozart\Assert\Assert;

/**
 * AddReturnTypeDeclarationRector rector can't detect a change from return type to nullable return type, so changing `string` to `?string` will not work.
 *
 * @see https://github.com/rectorphp/rector/issues/7395 - maintainer of the library will not fix that, so we need to create the rule ourselves.
 */
class SetNullableFunctionReturnTypeRector extends AbstractRector implements ConfigurableRectorInterface
{
    /**
     * @var NullableReturnTypeDeclaration[]
     */
    private array $methodReturnTypes = [];

    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [ClassMethod::class];
    }

    /**
     * @param NullableReturnTypeDeclaration[] $configuration
     */
    public function configure(array $configuration) : void
    {
        Assert::allIsAOf($configuration, NullableReturnTypeDeclaration::class);
        $this->methodReturnTypes = $configuration;
    }

    /**
     * @param ClassMethod $node
     */
    public function refactor(Node $node) : ?Node
    {
        foreach ($this->methodReturnTypes as $methodReturnType) {
            $objectType = $methodReturnType->getObjectType();

            if (!$this->isObjectType($node, $objectType)) {
                continue;
            }

            if (!$this->isName($node, $methodReturnType->getMethod())) {
                continue;
            }

            if (!$node->returnType) {
                continue;
            }

            $currentReturnType = $this->staticTypeMapper->mapPhpParserNodePHPStanType($node->returnType);

            if ($currentReturnType->isSuperTypeOf(new NullType())->yes()) {
                continue;
            }

            $newType = $currentReturnType instanceof UnionType
                ? new UnionType([new NullType(), ...$currentReturnType->getTypes()])
                : new UnionType([new NullType(), $currentReturnType]);

            $node->returnType = $this->staticTypeMapper->mapPHPStanTypeToPhpParserNode($newType, TypeKind::RETURN);

            return $node;
        }

        return null;
    }

    /**
     * From this method documentation is generated.
     */
    public function getRuleDefinition() : RuleDefinition
    {
        return new RuleDefinition(
            'Changes defined return type of method and class to nullable return type.',
            [
                new ConfiguredCodeSample(
                    <<<'CODE_SAMPLE'
class SomeClass
{
    public function getData(): string
    {
    }
}
CODE_SAMPLE,
                    <<<'CODE_SAMPLE'
class SomeClass
{
    public function getData(): ?string
    {
    }
}
CODE_SAMPLE
                    ,
                    [new NullableReturnTypeDeclaration('SomeClass', 'getData')]
                ),
            ]
        );
    }
}
