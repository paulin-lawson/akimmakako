<?php
/* Smarty version 3.1.48, created on 2024-07-17 07:19:04
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66977068344e19_39504711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1720451957,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_66977068344e19_39504711 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Conteneur carrousel">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="https://www.prestashop-project.org?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-FR&amp;utm_content=download">
            <figure>
              <img src="http://localhost/akimpresta/modules/ps_imageslider/images/347753a31ecdb67ffb4647e22a697dedf399deec_slide1 copie.jpg" alt="" loading="lazy" width="1110" height="340">
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://www.prestashop-project.org?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-FR&amp;utm_content=download">
            <figure>
              <img src="http://localhost/akimpresta/modules/ps_imageslider/images/259d712432feb3f8132bc4d76ba02a4b8a5f8268_slide2 fr.jpg" alt="" loading="lazy" width="1110" height="340">
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://www.prestashop-project.org?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-FR&amp;utm_content=download">
            <figure>
              <img src="http://localhost/akimpresta/modules/ps_imageslider/images/ab3ce0bf8347fc36dfc5eb968e6c89c8bb87435a_slide3 fr.jpg" alt="" loading="lazy" width="1110" height="340">
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Boutons du carrousel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Précédent">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Suivant">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
