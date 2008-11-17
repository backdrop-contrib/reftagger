<?php
// $Id$

/**
 * @file reftagger-control-panel.tpl.php
 * Default theme implementation for the Reftagger Control Panel
 *
 * Available variables:
 *
 * - $author: The author of the post.
 * - $time: How long ago the post was created.
 * - $topic: An object with the raw data of the post. Unsafe, be sure
 *   to clean this data before printing.
 *
 * @see template_preprocess_forum_submitted()
 * @see theme_forum_submitted()
 */
?>

<!-- RefTagger Control Panel -->
  <div id="lbsRefTaggerCP">
    <a href="http://www.logos.com/reftagger"><div id="lbsHeader">Bible Options</div></a>
    <div id="lbsVersionContainer">
      <select id="lbsVersion">
        <option value="NIV">NIV</option>
        <option value="NASB">NASB</option>
        <option value="KJV">KJV</option>
        <option value="ESV">ESV</option>
        <option value="ASV">ASV</option>
        <option value="TM">MSG</option>
        <option value="AB">AMP</option>
        <option value="NLT">NLT</option>
        <option value="CEV">CEV</option>
        <option value="NKJV">NKJV</option>
        <option value="NCV">NCV</option>
        <option value="KJ21">KJ21</option>
        <option value="YLT">YLT</option>
        <option value="DAR">DARBY</option>
        <option value="NLV">NLV</option>
        <option value="HCSB">HCSB</option>
        <option value="NIRV">NIRV</option>
        <option value="NIVUK">NIVUK</option>
        <option value="TNIV">TNIV</option>
      </select>
    </div>
    <div id="lbsLibronixContainer">
      <input id="lbsUseLibronixLinks" type="checkbox">
      <label for="lbsUseLibronixLinks">Libronix</label>
    </div>
    <div id="lbsSaveContainer">
      <input value="Save" id="lbsSave" onclick="javascript:Logos.ReferenceTagging.lbsSavePrefs()" type="button">
      </div>
    <div id="lbsFooter">
      <div id="lbsLogo"><a href="http://www.logos.com/"><img src="http://www.logos.com/images/Reftagger/transparent.gif" alt="Logos Bible Software" title="Logos Bible Software" border="0" height="19" width="64"></a></div>
      <a href="http://www.logos.com/demo">Bible Study Software</a></div>
    </div>
<!-- End RefTagger Control Panel. For more info visit http://www.logos.com/reftagger. -->
