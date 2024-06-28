<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<form class="form-search" action="<?= esc_url(home_url('/')) ?>">
    <input name="s" id="search" type="search" placeholder="Recherche" aria-label="Search" value="<?= get_search_query() ?>">
    <button class="btn-search" type="submit"><span class='material-icons'>search</span></button>
</form>