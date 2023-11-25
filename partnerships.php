<?php $pageTitle = "Partnership"; require_once('header.php') ?>


  <section class="partner">
    <form class="partner-form">
      <div class="partner-form__text">
        <h3 class="partner-form__heading">Let's be Friends</h3>
        <small class="partner-form__small">Interested in partnering with us?</small>
      </div>
      <input type="text" name="partner-name" class="partner-form__name" placeholder="Name">
      <input type="email" name="partner-email" class="partner-form__email" placeholder="Email">
      <input type="text" name="partner-company-name" class="partner-form__company" placeholder="Company Name">
      <textarea class="partner-form__message" name="" id="" cols="30" rows="10"
        placeholder="How can we partner?"></textarea>
      <input type="button" value="Send" class="partner-form__submit">
    </form>
  </section>
  
<?php require_once 'footer.php'?>