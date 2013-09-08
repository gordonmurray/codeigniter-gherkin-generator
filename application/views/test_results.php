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