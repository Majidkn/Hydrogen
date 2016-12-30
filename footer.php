<!-- Footer -->
  <footer id="footer" class="panel">
    <div class="inner split">
      <div>
        <section>
          <h2>درباره ما بیشتر بدانید</h2>
          <p><?php echo get_option('aboutus'); ?></p>
        </section>
        <section>
          <h2>ما را دنبال کنید ...</h2>
          <ul class="icons">
            <li><a href="<?php echo get_option('twitter_url'); ?>" class="icon fa-twitter"><span class="label">توییتر</span></a></li>
            <li><a href="<?php echo get_option('facebook_url'); ?>" class="icon fa-facebook"><span class="label">فیسبوک</span></a></li>
            <li><a href="<?php echo get_option('instagram_url'); ?>" class="icon fa-instagram"><span class="label">اینستاگرام</span></a></li>
            <li><a href="<?php echo get_option('github_url'); ?>" class="icon fa-github"><span class="label">گیت هاب</span></a></li>
            <li><a href="<?php echo get_option('dribbble_url'); ?>" class="icon fa-dribbble"><span class="label">دریبل</span></a></li>
            <li><a href="<?php echo get_option('linkedin_url'); ?>" class="icon fa-linkedin"><span class="label">لینکداین</span></a></li>
          </ul>
        </section>
        <p class="copyright">
				&copy; برنامه نویسی پوسته وردپرس توسط: <a href="http://majidkn.com">مجید کفاش نیری</a>.
			</p>
      </div>
      <div>
        <section>
          <h2>تماس با ما</h2>
          <form method="post" action="#">
            <div class="field half first">
              <input type="text" name="email" id="email" placeholder="ایمیل" />
            </div>
            <div class="field half">
              <input type="text" name="name" id="name" placeholder="نام" />
            </div>
            <div class="field">
              <textarea name="message" id="message" rows="4" placeholder="پیام"></textarea>
            </div>
            <ul class="actions">
              <li><input type="submit" value="ارسال" class="special" /></li>
              <li><input type="reset" value="بازنشانی" /></li>
            </ul>
          </form>
        </section>
      </div>
    </div>
  </footer>

</div>

<!-- Scripts -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.poptrox.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/skel.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/util.js"></script>
<!--[if lte IE 8]><script src="<?php bloginfo('template_directory'); ?>/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
