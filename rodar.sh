!/bin/bash
# Lançador do OpenRocket portátil
set -euo pipefail
exec "\$HOME/openrocket-portable/jre17/bin/java" -jar "\$HOME/openrocket-portable/OpenRocket-24.12.jar"
EOF