<?php
$class = 'alert';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
} else {
    $class .= ' alert-primary';
}


if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="<?= h($class) ?>" role="alert"><?= $message ?></div>