<ul>
  <?php if($phone_number): ?>
    <li class="phone">
      <a href="<?php print $phone_number_url; ?>">
        <i class="fa fa-phone"></i><span><?php print $phone_number; ?></span>
      </a>
    </li>
  <?php endif; ?>
  <li class="enquiry-form">
    <a href="<?php print url('contact'); ?>">
      <i class="fa fa-envelope"></i><span>Enquiry Form</span>
    </a>
  </li>
</ul>
