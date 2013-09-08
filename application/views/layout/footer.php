<hr>

Developed by <?php echo anchor('http://murrion.com', 'Murrion Sofware'); ?> to work with <?php echo anchor('http://behat.org/', 'Behat'); ?>, a PHP BDD Framework | <?php echo anchor('https://twitter.com/murrion', 'Follow me on Twitter'); ?> | <?php echo anchor('https://github.com/murrion/codeigniter-gherkin-generator', 'Code available on Github'); ?>

</div> 

<?php if ($_SERVER['SERVER_NAME'] == 'localhost'): ?>
    <br /><?php print_r($this->session->userdata); ?>
<?php endif; ?>

</body>
</html>