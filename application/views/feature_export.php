<?php $scenario = $this->session->userdata('scenario'); ?>
<?php if (is_array($scenario) && !empty($scenario)): ?>
Feature: Tests for <?php echo $scenario['url']; ?>

Scenario: <?php echo $scenario['name']; ?>

<?php if (isset($scenario['url']) && $scenario['url'] != ''): ?>
    Given I am on "<?php echo $scenario['url']; ?>"
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
    "<?php echo element('button_text', $action); ?>"
<?php endforeach; ?>
<?php endif; ?>
<?php if (isset($scenario['results_array']) && !empty($scenario['results_array'])): ?>
<?php $results = $scenario['results_array']; ?>
<?php foreach ($results as $result): ?>
    Then I should <?php echo $result['result']; ?> "<?php echo $result['result_text']; ?>"
<?php endforeach; ?>
<?php endif; ?>
<?php endif; ?>