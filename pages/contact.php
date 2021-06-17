<?php include 'includes/header.php'; ?>
  <div class="container mt-3">
    <div class="row">
      <h1>Contact</h1>
    </div>
    <div class="row">
      <div class="col-lg-6 pl-0">
        <hr>
        <h2>Infomation to contact us</h2>
        <p>Contact us if you have any problem while visiting our website</p>
        <p>(24/7 Support) Hotline: <b>0123-456-789</b></p>
        <form action="" method="POST" class="submit-form">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="validationDefault01" class="rounded-pill px-2 font-weight-bold">Name</label>
              <input type="text" class="form-control rounded-form" id="validationDefault01" placeholder="First name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="validationDefault02" class="rounded-pill px-2 font-weight-bold">Phone</label>
              <input type="text" class="form-control rounded-form" id="validationDefault02" placeholder="Phone" required>
            </div>
          </div>
          <div class="form-group">
            <label for="validationDefault03" class="rounded-pill px-2 font-weight-bold">Email</label>
            <input type="text" class="form-control rounded-form" id="validationDefault03" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="inputContext"><b>Context</b></label>
            <textarea class="form-control rounded-form" placeholder="Leave a message here" id="floatingTextarea1"></textarea>
          </div>
          <div class="form-group">
          </div>
          <button type="submit" class="btn btn-primary btn-submit">Send</button>
        </form>
        <br>
        <div class="alert alert-success d-none" role="alert">
          Well done!<br>
          Your message has been sent to TechNow.<br>
          The homepage will be reload soon.
        </div>
      </div> <!-- end of col-md-6 -->
      <div class="col-lg-6 pr-0 mt-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6307732935124!2d106.67998301532461!3d10.762912992330776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1c06f4e1dd%3A0x43900f1d4539a3d!2sVietnam%20National%20University%20Ho%20Chi%20Minh%20City%20-%20University%20of%20Science!5e0!3m2!1sen!2s!4v1616227684239!5m2!1sen!2s" width="600" height="288" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <h1 class="mt-4">Address</h1>
        <hr>
        <p>
          Công ty TNHH Bốn Thành Viên Đồ Chơi Công Nghệ Việt Nam<br>
          227 Đ. Nguyễn Văn Cừ, Phường 4, Quận 5, Thành phố Hồ Chí Minh<br>
          Email: <a href="mailto:technowvn@gmail.com">technowvn@gmail.com</a><br>
          Website: <a href="../../index.html">www.technow.vn</a>
        </p>
      </div> <!-- end of col-md-6 -->
    </div> <!-- end of row -->
  </div> <!-- end of container -->
<?php include 'includes/footer.php'; ?>
