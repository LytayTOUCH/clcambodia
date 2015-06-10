    
      <div class="ui stackable sixteen wide column grid centered algin" style="padding-bottom: 0px;">
        <div class="four wide column"><?php if ( dynamic_sidebar('Sitemap') ) : else : endif; ?></div>
        <div class="five wide column"><?php if ( dynamic_sidebar('Address Box ') ) : else : endif; ?></div>
        <div class="six wide column"><?php if ( dynamic_sidebar('Facebook Like Page') ) : else : endif; ?></div>
      </div>
        
      <div class="sixteen wide column left aligned">
        <div class="footer">
        <?php if ( dynamic_sidebar('Footer') ) : else : endif; ?>
        </div>
      </div>
      <?php wp_footer() ?>
    </div>
  </body>
</html>