/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-menu' : '&#xe000;',
			'icon-code' : '&#xe001;',
			'icon-wand' : '&#xe002;',
			'icon-lightning' : '&#xe003;',
			'icon-arrow-up' : '&#xe004;',
			'icon-twitter' : '&#xe005;',
			'icon-facebook' : '&#xe006;',
			'icon-linkedin' : '&#xe007;',
			'icon-heart' : '&#xe008;',
			'icon-angle-right' : '&#xf105;',
			'icon-angle-up' : '&#xf106;',
			'icon-angle-left' : '&#xf104;',
			'icon-angle-down' : '&#xf107;',
			'icon-pencil' : '&#xe009;',
			'icon-coin' : '&#xe00a;',
			'icon-globe' : '&#xe00b;',
			'icon-user' : '&#xe00c;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};