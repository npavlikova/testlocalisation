<p data-l10n-context="context" data-l10n-hint="hint">string</p>

<h1>string</h1>

<p>string</p>
<p lang="">string</p>

<img alt="string" title="string" src="..." />

<p>
    outer string
    <span lang="">inner string</span>
</p>
<p>
    <span lang="en">outer string</span>
    <span lang="">inner string</span>
</p>
<p>
    Click here: <a href="http://sample.com">http://sample.com</a>
</p>
<p>
    <span lang="en">Click here:</span>
    <a href="http://sample.com">http://sample.com</a>
</p>

<input type="search" placeholder="string">
<input type="text" value="string">

<div>string</div>
<div lang="en">string</div>

<?php
    echo "string";
    echo _("string");
    echo __('string');
    echo ___('string');
?>

<script type="text/javascript">
    alert("string");
    alert(___('string'));
</script>
