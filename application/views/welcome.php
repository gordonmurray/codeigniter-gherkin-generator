
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Gherkin Generator | Murrion Software</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">

        <style>
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>
        <link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet">
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-25154370-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#">A basic Gherkin generator</a>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="well">
                <p class="lead">This is the beginning of a very basic tool to help to generate '<?php echo anchor('https://github.com/cucumber/cucumber/wiki/Gherkin', 'Gherkin'); ?>', a language to aid in software development and testing. Developed to work with <?php echo anchor('http://behat.org/', 'Behat'); ?>, a PHP BDD Framework.</p>
            </div>

            <div class="well">

                <div class="row">
                    <div class="span8">
                        <?php echo form_open('welcome/name', array('class' => 'form-inline')); ?>
                        Step 1: What do you want to call this test? <input type="text" name="name" placeholder="A simple descriptive name of the test" class="span4" /> <input type="submit" name="submit" value="Name it" class="btn" />
                        <?php echo form_close(); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="span8">
                        <?php echo form_open('welcome/start', array('class' => 'form-inline')); ?>
                        Step 2: When I go to <input type="text" name="url" placeholder="a full website address" class="span4" /> <input type="submit" name="submit" value="Start" class="btn" />
                        <?php echo form_close(); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="span8">
                        <?php echo form_open('welcome/result', array('class' => 'form-inline')); ?>
                        Step 3/4/5... Then I should 
                        <select class="span1" name="result">
                            <option value="see" >see</option>
                            <option value="not see" >not see</option>
                        </select> <input type="text" name="result_text" placeholder="some text on that page" class="span4" /> <input type="submit" name="submit" value="Add" class="btn" />
                        <?php echo form_close(); ?>
                    </div>
                </div>

            </div>

            <?php if ($this->session->flashdata('tests')): ?>

                <?php if ($this->session->flashdata('tests') == 'failed'): ?>
                    <div class="alert alert-error">
                        Sorry, this test failed
                    </div>
                <?php endif; ?>

                <?php if ($this->session->flashdata('tests') == 'passed'): ?>
                    <div class="alert alert-success">
                        Good work, Your test passed
                    </div>
                <?php endif; ?>

            <?php endif; ?>

            <div class="well">
                <?php echo $this->load->view('feature_output'); ?>
            </div>

            <hr>

            Developed by <?php echo anchor('http://murrion.com', 'Murrion Sofware'); ?> | <?php echo anchor('https://twitter.com/murrion', 'Follow me on Twitter'); ?>

        </div> 

    </body>
</html>
