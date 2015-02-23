<?php
/**
 * @file
 * Main template for the wizard. This wraps every other template file created.
 *
 * Available variables:
 *
 * - $ctools_trail: Rendered html displaying the ctools breadcrumb.
 *
 * - $sub_tpl: A string representing the form id of the current step. This is
 *   used to fetch the correct template.
 *
 * - $next: Rendered html displaying the next button.
 *
 * - $previous: Rendered html displaying the back button.
 *
 * - finish: Rendered html displaying the finish button.
 *
 * - $cancel: Rendered html displaying the cancel button.
 */
?>

<div class="container">
  <?php if (!empty($ctools_trail)): ?>
    <div class="ctools-trail"><?php print $ctools_trail; ?></div>
  <?php endif; ?>
</div>

<div class="container">
  <div class="main">
    <div class="content">
      <?php
      // Now print the theme...
      print theme($sub_tpl, $form);
      ?>
    </div>
    <?php if ($next || $previous || $finish || $cancel): ?>
      <div class="panel actions-wrapper">
        <div class="pull-left left">
          <span class="next-button"><?php print $next; ?></span>
          <span class="previous-button"><?php print $previous; ?></span>
          <span class="finish-button"><?php print $finish; ?></span>
        </div>
        <div class="pull-right right">
          <span class="cancel-button"><?php print $cancel; ?></span>
        </div>
      </div>
    <? endif; ?>
  </div>
</div>

<div class="container">
  <div class="row form-group">
    <div class="col-xs-12">
      <ul class="nav nav-pills nav-justified thumbnail setup-panel">
        <li class="active"><a href="#step-1">
            <h4 class="list-group-item-heading">Step 1</h4>
            <p class="list-group-item-text">First step description</p>
          </a></li>
        <li class="disabled"><a href="#step-2">
            <h4 class="list-group-item-heading">Step 2</h4>
            <p class="list-group-item-text">Second step description</p>
          </a></li>
        <li class="disabled"><a href="#step-3">
            <h4 class="list-group-item-heading">Step 3</h4>
            <p class="list-group-item-text">Third step description</p>
          </a></li>
      </ul>
    </div>
  </div>
  <div class="row setup-content" id="step-1">
    <div class="col-xs-12">
      <div class="col-md-12 well text-center">
        <h1> STEP 1</h1>
        <button id="activate-step-2" class="btn btn-primary btn-lg">Activate Step 2</button>
      </div>
    </div>
  </div>
  <div class="row setup-content" id="step-2">
    <div class="col-xs-12">
      <div class="col-md-12 well">
        <h1 class="text-center"> STEP 2</h1>
      </div>
    </div>
  </div>
  <div class="row setup-content" id="step-3">
    <div class="col-xs-12">
      <div class="col-md-12 well">
        <h1 class="text-center"> STEP 3</h1>
      </div>
    </div>
  </div>
</div>
