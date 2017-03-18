<ul>
  <li class="email">
    <i class="fa fa-envelope"></i>
    <a href="<?php print url('contact'); ?>">
      <span>Enquiry Form</span>
    </a>
  </li>
  <?php if($phone_number): ?>
    <li class="phone">
      <i class="fa fa-phone"></i>
      <a href="<?php print $phone_number_url; ?>">
        <span><?php print $phone_number; ?></span>
      </a>
    </li>
  <?php endif; ?>
  <?php if($fax_number): ?>
    <li class="fax">
      <i class="fa fa-fax"></i>
      <a href="<?php print $fax_number_url; ?>">
        <span><?php print $fax_number; ?></span>
      </a>
    </li>
  <?php endif; ?>
  <?php if($address): ?>
    <li class-"address">
      <i class="fa fa-map-marker"></i>
      <p><?php print $address; ?></p>
    </li>
  <?php endif; ?>
</ul>
