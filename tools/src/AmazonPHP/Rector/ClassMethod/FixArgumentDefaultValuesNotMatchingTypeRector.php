<?php

declare(strict_types=1);

namespace AmazonPHP\Rector\ClassMethod;

use PhpParser\Node;
use PhpParser\Node\Stmt\ClassMethod;
use PHPStan\Type\BooleanType;
use PHPStan\Type\StringType;
use Rector\Core\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

class FixArgumentDefaultValuesNotMatchingTypeRector extends AbstractRector
{
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [ClassMethod::class];
    }

    /**
     * @param ClassMethod $node
     */
    public function refactor(Node $node) : ?Node
    {
        foreach ($node->params as $index => $param) {
            if (!$param->type instanceof Node) {
                continue;
            }

            if ($param->default === null) {
                continue;
            }

            $paramType = $this->nodeTypeResolver->resolve($param->type);

            $defaultType = $this->nodeTypeResolver->resolve($param->default);

            if ($paramType instanceof BooleanType && $defaultType instanceof StringType) {
                switch (\strtolower($param->default->value)) {
                    case 'true':
                        $param->default = $this->nodeFactory->createtrue();

                        break;
                    case 'false':
                    default:
                        $param->default = $this->nodeFactory->createFalse();

                        break;
                }
            }
        }

        return $node;
    }

    /**
     * From this method documentation is generated.
     */
    public function getRuleDefinition() : RuleDefinition
    {
        return new RuleDefinition(
            'Fix default values not matching argument type declaration',
            [
                new CodeSample(
                    // code before
                    'SomeClass::method(bool $value = \'true\')',
                    // code after
                    'SomeClass::method(bool $value = true)'
                ),
            ]
        );
    }
}
