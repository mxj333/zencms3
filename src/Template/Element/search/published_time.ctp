<?php
echo $this->Html->link($value->timeAgoInWords(), [
    'action' => $options['action'],
    'published_time' => $value->format('Y-m-d')
]);