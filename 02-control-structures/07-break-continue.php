<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break; // Exit the loop when $i is 5
    }
    echo "Iteration: $i\n";
}

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // Skip the rest of the loop when $i is 5
    }
    echo "Iteration: $i\n";
}
?>