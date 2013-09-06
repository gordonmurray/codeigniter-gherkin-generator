<?php $scenario = $this->session->userdata('scenario'); ?>

<?php if (is_array($scenario) && !empty($scenario)): ?>

    <?php if (isset($scenario['url']) && $scenario['url'] != ''): ?>

        <?php
        $parse_url = $parse = parse_url($scenario['url']);
        $host = $parse_url['host'];
        ?>

        <strong><?php echo str_replace(".", "_", $host); ?>.feature</strong><br /><br />

    <?php endif; ?>

    Scenario: <?php echo $scenario['name']; ?><br />

    <?php if (isset($scenario['url']) && $scenario['url'] != ''): ?>
        &nbsp;&nbsp;Given I am on "<?php echo $scenario['url']; ?>"<br />
    <?php endif; ?>

    <?php if (isset($scenario['results_array']) && !empty($scenario['results_array'])): ?>

        <?php $results = $scenario['results_array']; ?>

        <?php foreach ($results as $result): ?>
            &nbsp;&nbsp; Then I should <?php echo $result['result']; ?> "<?php echo $result['result_text']; ?>"<br />
        <?php endforeach; ?>

    <?php endif; ?>

    <hr>
    <?php echo anchor('welcome/export', '<i class="icon-download-alt"></i> Export', array('class' => 'btn btn-mini btn-info')); ?>
    <?php echo anchor('welcome/restart', '<i class="icon-trash"></i> Start over', array('class' => 'btn btn-mini btn-warning')); ?>
    <?php echo anchor('run', '<i class="icon-ok"></i> Run the test', array('class' => 'btn btn-mini btn-success')); ?>
    <?php echo anchor('#', '<i class="icon-time"></i> Schedule this test', array('class' => 'btn btn-mini btn-primary disabled')); ?>


<?php else: ?>
    Start creating a test to generate a *.feature file to test, export or schedule for later
<?php endif; ?>