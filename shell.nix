let
    pkgs = import (fetchTarball "https://github.com/nixos/nixpkgs/archive/d44916d12f1d39baa02325040b381311364ad93a.tar.gz" ) {};
in

let
    php = pkgs.php74.buildEnv {
        extensions = ({ enabled, all }: enabled++ [ all.pcov ]);
        extraConfig =
        ''
            short_open_tag = Off
            memory_limit = -1
            date.timezone = UTC
        '';
    };
in

pkgs.mkShell {
    name = "amazon-php-sdk";
    nativeBuildInputs = with pkgs; [
        php
        php.packages.composer
    ];
}
