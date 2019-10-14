<form action="./" method="get" class="form--search">
  <label class="input header__input">
    <input type="text" placeholder="Suche" class="input__field" name="s" value="<?php the_search_query(); ?>">
    <span class="input__label">Suche</span>
    <div class="input__border"></div>
    <span class="input__icon icon icon--search trigger-search"></span>
  </label>
</form>