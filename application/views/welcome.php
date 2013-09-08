<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/navigation'); ?>

<div class="container">

    <?php echo $this->load->view('test_results'); ?>

    <div class="well">
        <?php if (!$this->session->userdata('scenario')): ?>
            This is a tool to help to generate '<?php echo anchor('https://github.com/cucumber/cucumber/wiki/Gherkin', 'Gherkin'); ?>', a language to aid in software development and testing.
        <?php else: ?>
            <?php echo $this->load->view('feature_output'); ?>
        <?php endif; ?>
    </div>

    <div class="well">

        <div class="row">
            <div class="span8">
                <?php echo form_open('gherkin/name', array('class' => 'form-inline')); ?>
                What do you want to call this test? <input type="text" name="name" placeholder="A simple descriptive name of the test" class="span4" /> <input type="submit" name="submit" value="Name it" class="btn" />
                <?php echo form_close(); ?>
            </div>
        </div>

        <div class="row">
            <div class="span8">
                <?php echo form_open('gherkin/start', array('class' => 'form-inline')); ?>
                When I go to <input type="text" name="url" placeholder="a full website address" class="span4" /> <input type="submit" name="submit" value="Add" class="btn" />
                <?php echo form_close(); ?>
            </div>
        </div>

        <div class="row">
            <div class="span8">
                <?php echo form_open('gherkin/click_action', array('class' => 'form-inline')); ?>
                And I click on a 
                <select class="span2" name="button_type">
                    <option value="link" >link</option>
                    <option value="button" >button</option>
                </select> 
                called <input type="text" name="button_text" placeholder="enter a link or button name here" class="span4" /> <input type="submit" name="submit" value="Add" class="btn" />
                <?php echo form_close(); ?>
            </div>
        </div>

        <div class="row">
            <div class="span8">
                <?php echo form_open('gherkin/result', array('class' => 'form-inline')); ?>
                Then I should 
                <select class="span1" name="result">
                    <option value="see" >see</option>
                    <option value="not see" >not see</option>
                </select> <input type="text" name="result_text" placeholder="some text on that page" class="span4" /> <input type="submit" name="submit" value="Add" class="btn" />
                <?php echo form_close(); ?>
            </div>
        </div>


    </div>



    <?php $this->load->view('layout/footer'); ?>