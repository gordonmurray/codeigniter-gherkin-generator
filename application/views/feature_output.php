<?php $scenario = $this->session->userdata('scenario'); ?>

<?php if (isset($scenario['url']) && $scenario['url'] != ''): ?>

    <?php
    $parse_url = $parse = parse_url($scenario['url']);
    $host = $parse_url['host'];
    ?>

    <strong>untitled.feature</strong><br /><br />

<?php endif; ?>

Scenario: <?php echo element('name', $scenario, 'untitled'); ?><br />

<?php if (isset($scenario['url']) && $scenario['url'] != ''): ?>
    &nbsp;&nbsp;Given I am on "<?php echo element('url', $scenario); ?>"<br />
<?php endif; ?>

<?php if (isset($scenario['actions_array']) && !empty($scenario['actions_array'])): ?> 

    <?php $actions = $scenario['actions_array']; ?>

    <?php foreach ($actions as $action): ?>
        &nbsp; &nbsp; And I 
        <?php if ($action['button_type'] == 'link'): ?>
            follow
        <?php endif; ?>
        <?php if ($action['button_type'] == 'button'): ?>
            press
        <?php endif; ?>
        "<?php echo element('button_text', $action); ?>"<br />
    <?php endforeach; ?>

<?php endif; ?>

<?php if (isset($scenario['results_array']) && !empty($scenario['results_array'])): ?>

    <?php $results = $scenario['results_array']; ?>

    <?php foreach ($results as $result): ?>
        &nbsp;&nbsp; Then I should <?php echo $result['result']; ?> "<?php echo $result['result_text']; ?>"<br />
    <?php endforeach; ?>

<?php endif; ?>

<hr>

<?php echo anchor('gherkin/export', '<i class="icon-download-alt"></i> Export', array('class' => 'btn btn-mini btn-info')); ?> 
<?php echo anchor('gherkin/restart', '<i class="icon-trash"></i> Start over', array('class' => 'btn btn-mini btn-warning')); ?> 