<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Showtime $showtime
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Showtime'), ['action' => 'edit', $showtime->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Showtime'), ['action' => 'delete', $showtime->id], ['confirm' => __('Are you sure you want to delete # {0}?', $showtime->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Showtimes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Showtime'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Movies'), ['controller' => 'Movies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movie'), ['controller' => 'Movies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="showtimes view large-9 medium-8 columns content">
    <h3><?= h($showtime->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($showtime->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Movie') ?></th>
            <td><?= $this->Number->format($showtime->movie_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Room') ?></th>
            <td><?= $this->Number->format($showtime->room_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start') ?></th>
            <td><?= h($showtime->start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End') ?></th>
            <td><?= h($showtime->end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($showtime->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($showtime->modified) ?></td>
        </tr>
    </table>
        <div class="related">
            <h4><?= __('Showtimes this week : ') ?></h4>
            <?php if (!empty($movie->showtimes)): ?>
            <table cellpadding="0" cellspacing="0">
                <?php foreach ($movie->showtimes as $showtimes): ?>
                    
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
</div>
