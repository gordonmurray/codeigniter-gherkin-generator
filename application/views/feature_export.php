<?php $scenario = $this->session->userdata('scenario'); ?>
<?php if (is_array($scenario) && !empty($scenario)): ?>
Scenario: <?php echo $scenario['name']; ?>

<?php if (isset($scenario['url']) && $scenario['url'] != ''): ?>
    Given I am on "<?php echo $scenario['url']; ?>"
<?php endif; ?>
        
<?php if (isset($scenario['results_array']) && !empty($scenario['results_array'])): ?>
<?php $results = $scenario['results_array']; ?>
<?php foreach ($results as $result): ?>
    Then I should <?php echo $result['result']; ?> "<?php echo $result['result_text']; ?>"
<?php endforeach; ?>
<?php endif; ?>
        
<?php endif; ?>