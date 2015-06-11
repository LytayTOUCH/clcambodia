    </div>
    <div class="ui page stackable wide three column grid" style="margin-top: 0px;">
      <div class="four wide column"><?php if ( dynamic_sidebar('Sitemap') ) : else : endif; ?></div>
      <div class="six wide column"><?php if ( dynamic_sidebar('Address Box ') ) : else : endif; ?></div>
      <div class="six wide column"><?php if ( dynamic_sidebar('Facebook Like Page') ) : else : endif; ?></div>
    </div>

    <div class="ui page wide one column grid" style="margin-top: 0px;">
      <div class = "sixtenn wide column">
        <div class="footer">
          <?php if ( dynamic_sidebar('Footer') ) : else : endif; ?>
        </div>
      </div>
    </div>
    <?php wp_footer() ?>
  </body>
</html>