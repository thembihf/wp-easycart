<div class="ec_filter_bar">
  <div class="ec_filter_bar_left">
    <?php $this->product_filter_combo(1); //Input is the default selection for the filter drop down box ?>
  </div>
  <div class="ec_filter_bar_right">Items Per Page:
    <?php $this->product_items_per_page( " " ); //Input is the divider between the numbers, e.g. 3 12 48 (uses spaces) ?>
    | Page
    <?php $this->product_current_page(); ?>
    of
    <?php $this->product_total_pages(); ?>
    |
    <?php $this->product_paging( " " ); //Input is the divider between the numbers, e.g. 1 2 3 (uses spaces) ?>
  </div>
</div>