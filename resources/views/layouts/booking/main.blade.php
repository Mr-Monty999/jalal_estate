<head>


    {{-- <link href="http://localhost:8001/libs/bootstrap/css/bootstrap.css" rel="stylesheet"> --}}
    <link href="http://localhost:8001/libs/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="http://localhost:8001/libs/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="http://localhost:8001/libs/icofont/icofont.min.css" rel="stylesheet">
    <link href="http://localhost:8001/libs/select2/css/select2.min.css" rel="stylesheet">
    <link href="http://localhost:8001/dist/frontend/css/notification.css" rel="newest stylesheet">
    <link href="http://localhost:8001/dist/frontend/css/app.css?_ver=3.2.1" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="http://localhost:8001/libs/daterange/daterangepicker.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel='stylesheet' id='google-font-css-css'
        href='https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500%2C600&display=swap' type='text/css'
        media='all' />



    <link href="http://localhost:8001/dist/frontend/module/hotel/css/hotel.css?_ver=3.2.1" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="http://localhost:8001/libs/ion_rangeslider/css/ion.rangeSlider.min.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8001/libs/fotorama/fotorama.css" />

    <link href="http://localhost:8001/custom-css" rel="stylesheet">
    <link href="http://localhost:8001/libs/carousel-2/owl.carousel.css" rel="stylesheet">



    <link rel='stylesheet' type='text/css' property='stylesheet'
        href='//localhost:8001/_debugbar/assets/stylesheets?v=1675954596&theme=auto' data-turbolinks-eval='false'
        data-turbo-eval='false'>
    <script src='//localhost:8001/_debugbar/assets/javascript?v=1675954596' data-turbolinks-eval='false'
        data-turbo-eval='false'></script>
    <script data-turbo-eval="false">
        jQuery.noConflict(true);
    </script>
    <script>
        Sfdump = window.Sfdump || (function(doc) {
            var refStyle = doc.createElement('style'),
                rxEsc = /([.*+?^${}()|\[\]\/\\])/g,
                idRx = /\bsf-dump-\d+-ref[012]\w+\b/,
                keyHint = 0 <= navigator.platform.toUpperCase().indexOf('MAC') ? 'Cmd' : 'Ctrl',
                addEventListener = function(e, n, cb) {
                    e.addEventListener(n, cb, false);
                };
            refStyle.innerHTML =
                '.phpdebugbar pre.sf-dump .sf-dump-compact, .sf-dump-str-collapse .sf-dump-str-collapse, .sf-dump-str-expand .sf-dump-str-expand { display: none; }';
            (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle);
            refStyle = doc.createElement('style');
            (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle);
            if (!doc.addEventListener) {
                addEventListener = function(element, eventName, callback) {
                    element.attachEvent('on' + eventName, function(e) {
                        e.preventDefault = function() {
                            e.returnValue = false;
                        };
                        e.target = e.srcElement;
                        callback(e);
                    });
                };
            }

            function toggle(a, recursive) {
                var s = a.nextSibling || {},
                    oldClass = s.className,
                    arrow, newClass;
                if (/\bsf-dump-compact\b/.test(oldClass)) {
                    arrow = '▼';
                    newClass = 'sf-dump-expanded';
                } else if (/\bsf-dump-expanded\b/.test(oldClass)) {
                    arrow = '▶';
                    newClass = 'sf-dump-compact';
                } else {
                    return false;
                }
                if (doc.createEvent && s.dispatchEvent) {
                    var event = doc.createEvent('Event');
                    event.initEvent('sf-dump-expanded' === newClass ? 'sfbeforedumpexpand' : 'sfbeforedumpcollapse',
                        true, false);
                    s.dispatchEvent(event);
                }
                a.lastChild.innerHTML = arrow;
                s.className = s.className.replace(/\bsf-dump-(compact|expanded)\b/, newClass);
                if (recursive) {
                    try {
                        a = s.querySelectorAll('.' + oldClass);
                        for (s = 0; s < a.length; ++s) {
                            if (-1 == a[s].className.indexOf(newClass)) {
                                a[s].className = newClass;
                                a[s].previousSibling.lastChild.innerHTML = arrow;
                            }
                        }
                    } catch (e) {}
                }
                return true;
            };

            function collapse(a, recursive) {
                var s = a.nextSibling || {},
                    oldClass = s.className;
                if (/\bsf-dump-expanded\b/.test(oldClass)) {
                    toggle(a, recursive);
                    return true;
                }
                return false;
            };

            function expand(a, recursive) {
                var s = a.nextSibling || {},
                    oldClass = s.className;
                if (/\bsf-dump-compact\b/.test(oldClass)) {
                    toggle(a, recursive);
                    return true;
                }
                return false;
            };

            function collapseAll(root) {
                var a = root.querySelector('a.sf-dump-toggle');
                if (a) {
                    collapse(a, true);
                    expand(a);
                    return true;
                }
                return false;
            }

            function reveal(node) {
                var previous, parents = [];
                while ((node = node.parentNode || {}) && (previous = node.previousSibling) && 'A' === previous
                    .tagName) {
                    parents.push(previous);
                }
                if (0 !== parents.length) {
                    parents.forEach(function(parent) {
                        expand(parent);
                    });
                    return true;
                }
                return false;
            }

            function highlight(root, activeNode, nodes) {
                resetHighlightedNodes(root);
                Array.from(nodes || []).forEach(function(node) {
                    if (!/\bsf-dump-highlight\b/.test(node.className)) {
                        node.className = node.className + ' sf-dump-highlight';
                    }
                });
                if (!/\bsf-dump-highlight-active\b/.test(activeNode.className)) {
                    activeNode.className = activeNode.className + ' sf-dump-highlight-active';
                }
            }

            function resetHighlightedNodes(root) {
                Array.from(root.querySelectorAll(
                        '.sf-dump-str, .sf-dump-key, .sf-dump-public, .sf-dump-protected, .sf-dump-private'))
                    .forEach(function(strNode) {
                        strNode.className = strNode.className.replace(/\bsf-dump-highlight\b/, '');
                        strNode.className = strNode.className.replace(/\bsf-dump-highlight-active\b/, '');
                    });
            }
            return function(root, x) {
                root = doc.getElementById(root);
                var indentRx = new RegExp('^(' + (root.getAttribute('data-indent-pad') || ' ').replace(rxEsc,
                        '\\$1') + ')+', 'm'),
                    options = {
                        "maxDepth": 1,
                        "maxStringLength": 160,
                        "fileLinkFormat": false
                    },
                    elt = root.getElementsByTagName('A'),
                    len = elt.length,
                    i = 0,
                    s, h, t = [];
                while (i < len) t.push(elt[i++]);
                for (i in x) {
                    options[i] = x[i];
                }

                function a(e, f) {
                    addEventListener(root, e, function(e, n) {
                        if ('A' == e.target.tagName) {
                            f(e.target, e);
                        } else if ('A' == e.target.parentNode.tagName) {
                            f(e.target.parentNode, e);
                        } else {
                            n = /\bsf-dump-ellipsis\b/.test(e.target.className) ? e.target.parentNode :
                                e.target;
                            if ((n = n.nextElementSibling) && 'A' == n.tagName) {
                                if (!/\bsf-dump-toggle\b/.test(n.className)) {
                                    n = n.nextElementSibling || n;
                                }
                                f(n, e, true);
                            }
                        }
                    });
                };

                function isCtrlKey(e) {
                    return e.ctrlKey || e.metaKey;
                }

                function xpathString(str) {
                    var parts = str.match(/[^'"]+|['"]/g).map(function(part) {
                        if ("'" == part) {
                            return '"\'"';
                        }
                        if ('"' == part) {
                            return "'\"'";
                        }
                        return "'" + part + "'";
                    });
                    return "concat(" + parts.join(",") + ", '')";
                }

                function xpathHasClass(className) {
                    return "contains(concat(' ', normalize-space(@class), ' '), ' " + className + " ')";
                }
                addEventListener(root, 'mouseover', function(e) {
                    if ('' != refStyle.innerHTML) {
                        refStyle.innerHTML = '';
                    }
                });
                a('mouseover', function(a, e, c) {
                    if (c) {
                        e.target.style.cursor = "pointer";
                    } else if (a = idRx.exec(a.className)) {
                        try {
                            refStyle.innerHTML = '.phpdebugbar pre.sf-dump .' + a[0] +
                                '{background-color: #B729D9; color: #FFF !important; border-radius: 2px}';
                        } catch (e) {}
                    }
                });
                a('click', function(a, e, c) {
                    if (/\bsf-dump-toggle\b/.test(a.className)) {
                        e.preventDefault();
                        if (!toggle(a, isCtrlKey(e))) {
                            var r = doc.getElementById(a.getAttribute('href').slice(1)),
                                s = r.previousSibling,
                                f = r.parentNode,
                                t = a.parentNode;
                            t.replaceChild(r, a);
                            f.replaceChild(a, s);
                            t.insertBefore(s, r);
                            f = f.firstChild.nodeValue.match(indentRx);
                            t = t.firstChild.nodeValue.match(indentRx);
                            if (f && t && f[0] !== t[0]) {
                                r.innerHTML = r.innerHTML.replace(new RegExp('^' + f[0].replace(rxEsc,
                                    '\\$1'), 'mg'), t[0]);
                            }
                            if (/\bsf-dump-compact\b/.test(r.className)) {
                                toggle(s, isCtrlKey(e));
                            }
                        }
                        if (c) {} else if (doc.getSelection) {
                            try {
                                doc.getSelection().removeAllRanges();
                            } catch (e) {
                                doc.getSelection().empty();
                            }
                        } else {
                            doc.selection.empty();
                        }
                    } else if (/\bsf-dump-str-toggle\b/.test(a.className)) {
                        e.preventDefault();
                        e = a.parentNode.parentNode;
                        e.className = e.className.replace(/\bsf-dump-str-(expand|collapse)\b/, a
                            .parentNode.className);
                    }
                });
                elt = root.getElementsByTagName('SAMP');
                len = elt.length;
                i = 0;
                while (i < len) t.push(elt[i++]);
                len = t.length;
                for (i = 0; i < len; ++i) {
                    elt = t[i];
                    if ('SAMP' == elt.tagName) {
                        a = elt.previousSibling || {};
                        if ('A' != a.tagName) {
                            a = doc.createElement('A');
                            a.className = 'sf-dump-ref';
                            elt.parentNode.insertBefore(a, elt);
                        } else {
                            a.innerHTML += ' ';
                        }
                        a.title = (a.title ? a.title + '\n[' : '[') + keyHint + '+click] Expand all children';
                        a.innerHTML += elt.className == 'sf-dump-compact' ? '<span>▶</span>' : '<span>▼</span>';
                        a.className += ' sf-dump-toggle';
                        x = 1;
                        if ('sf-dump' != elt.parentNode.className) {
                            x += elt.parentNode.getAttribute('data-depth') / 1;
                        }
                    } else if (/\bsf-dump-ref\b/.test(elt.className) && (a = elt.getAttribute('href'))) {
                        a = a.slice(1);
                        elt.className += ' ' + a;
                        if (/[\[{]$/.test(elt.previousSibling.nodeValue)) {
                            a = a != elt.nextSibling.id && doc.getElementById(a);
                            try {
                                s = a.nextSibling;
                                elt.appendChild(a);
                                s.parentNode.insertBefore(a, s);
                                if (/^[@#]/.test(elt.innerHTML)) {
                                    elt.innerHTML += ' <span>▶</span>';
                                } else {
                                    elt.innerHTML = '<span>▶</span>';
                                    elt.className = 'sf-dump-ref';
                                }
                                elt.className += ' sf-dump-toggle';
                            } catch (e) {
                                if ('&' == elt.innerHTML.charAt(0)) {
                                    elt.innerHTML = '…';
                                    elt.className = 'sf-dump-ref';
                                }
                            }
                        }
                    }
                }
                if (doc.evaluate && Array.from && root.children.length > 1) {
                    root.setAttribute('tabindex', 0);
                    SearchState = function() {
                        this.nodes = [];
                        this.idx = 0;
                    };
                    SearchState.prototype = {
                        next: function() {
                            if (this.isEmpty()) {
                                return this.current();
                            }
                            this.idx = this.idx < (this.nodes.length - 1) ? this.idx + 1 : 0;
                            return this.current();
                        },
                        previous: function() {
                            if (this.isEmpty()) {
                                return this.current();
                            }
                            this.idx = this.idx > 0 ? this.idx - 1 : (this.nodes.length - 1);
                            return this.current();
                        },
                        isEmpty: function() {
                            return 0 === this.count();
                        },
                        current: function() {
                            if (this.isEmpty()) {
                                return null;
                            }
                            return this.nodes[this.idx];
                        },
                        reset: function() {
                            this.nodes = [];
                            this.idx = 0;
                        },
                        count: function() {
                            return this.nodes.length;
                        },
                    };

                    function showCurrent(state) {
                        var currentNode = state.current(),
                            currentRect, searchRect;
                        if (currentNode) {
                            reveal(currentNode);
                            highlight(root, currentNode, state.nodes);
                            if ('scrollIntoView' in currentNode) {
                                currentNode.scrollIntoView(true);
                                currentRect = currentNode.getBoundingClientRect();
                                searchRect = search.getBoundingClientRect();
                                if (currentRect.top < (searchRect.top + searchRect.height)) {
                                    window.scrollBy(0, -(searchRect.top + searchRect.height + 5));
                                }
                            }
                        }
                        counter.textContent = (state.isEmpty() ? 0 : state.idx + 1) + ' of ' + state.count();
                    }
                    var search = doc.createElement('div');
                    search.className = 'sf-dump-search-wrapper sf-dump-search-hidden';
                    search.innerHTML =
                        ' <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0<\/span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> ';
                    root.insertBefore(search, root.firstChild);
                    var state = new SearchState();
                    var searchInput = search.querySelector('.sf-dump-search-input');
                    var counter = search.querySelector('.sf-dump-search-count');
                    var searchInputTimer = 0;
                    var previousSearchQuery = '';
                    addEventListener(searchInput, 'keyup', function(e) {
                        var searchQuery = e.target
                            .value; /* Don't perform anything if the pressed key didn't change the query */
                        if (searchQuery === previousSearchQuery) {
                            return;
                        }
                        previousSearchQuery = searchQuery;
                        clearTimeout(searchInputTimer);
                        searchInputTimer = setTimeout(function() {
                            state.reset();
                            collapseAll(root);
                            resetHighlightedNodes(root);
                            if ('' === searchQuery) {
                                counter.textContent = '0 of 0';
                                return;
                            }
                            var classMatches = ["sf-dump-str", "sf-dump-key", "sf-dump-public",
                                "sf-dump-protected", "sf-dump-private",
                            ].map(xpathHasClass).join(' or ');
                            var xpathResult = doc.evaluate('.//span[' + classMatches +
                                '][contains(translate(child::text(), ' + xpathString(
                                    searchQuery.toUpperCase()) + ', ' + xpathString(
                                    searchQuery.toLowerCase()) + '), ' + xpathString(
                                    searchQuery.toLowerCase()) + ')]', root, null,
                                XPathResult.ORDERED_NODE_ITERATOR_TYPE, null);
                            while (node = xpathResult.iterateNext()) state.nodes.push(node);
                            showCurrent(state);
                        }, 400);
                    });
                    Array.from(search.querySelectorAll(
                        '.sf-dump-search-input-next, .sf-dump-search-input-previous')).forEach(function(
                        btn) {
                        addEventListener(btn, 'click', function(e) {
                            e.preventDefault(); - 1 !== e.target.className.indexOf('next') ?
                                state.next() : state.previous();
                            searchInput.focus();
                            collapseAll(root);
                            showCurrent(state);
                        })
                    });
                    addEventListener(root, 'keydown', function(e) {
                        var isSearchActive = !/\bsf-dump-search-hidden\b/.test(search.className);
                        if ((114 === e.keyCode && !isSearchActive) || (isCtrlKey(e) && 70 === e
                                .keyCode)) {
                            /* F3 or CMD/CTRL + F */
                            if (70 === e.keyCode && document.activeElement === searchInput) {
                                /* * If CMD/CTRL + F is hit while having focus on search input, * the user probably meant to trigger browser search instead. * Let the browser execute its behavior: */
                                return;
                            }
                            e.preventDefault();
                            search.className = search.className.replace(/\bsf-dump-search-hidden\b/,
                                '');
                            searchInput.focus();
                        } else if (isSearchActive) {
                            if (27 === e.keyCode) {
                                /* ESC key */
                                search.className += ' sf-dump-search-hidden';
                                e.preventDefault();
                                resetHighlightedNodes(root);
                                searchInput.value = '';
                            } else if ((isCtrlKey(e) && 71 === e.keyCode) /* CMD/CTRL + G */ || 13 === e
                                .keyCode /* Enter */ || 114 === e.keyCode /* F3 */ ) {
                                e.preventDefault();
                                e.shiftKey ? state.previous() : state.next();
                                collapseAll(root);
                                showCurrent(state);
                            }
                        }
                    });
                }
                if (0 >= options.maxStringLength) {
                    return;
                }
                try {
                    elt = root.querySelectorAll('.sf-dump-str');
                    len = elt.length;
                    i = 0;
                    t = [];
                    while (i < len) t.push(elt[i++]);
                    len = t.length;
                    for (i = 0; i < len; ++i) {
                        elt = t[i];
                        s = elt.innerText || elt.textContent;
                        x = s.length - options.maxStringLength;
                        if (0 < x) {
                            h = elt.innerHTML;
                            elt[elt.innerText ? 'innerText' : 'textContent'] = s.substring(0, options
                                .maxStringLength);
                            elt.className += ' sf-dump-str-collapse';
                            elt.innerHTML = '<span class=sf-dump-str-collapse>' + h +
                                '<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span>' +
                                '<span class=sf-dump-str-expand>' + elt.innerHTML +
                                '<a class="sf-dump-ref sf-dump-str-toggle" title="' + x +
                                ' remaining characters"> ▶</a></span>';
                        }
                    }
                } catch (e) {}
            };
        })(document);
    </script>
    <style>
        .phpdebugbar pre.sf-dump {
            display: block;
            white-space: pre;
            padding: 5px;
            overflow: initial !important;
        }

        .phpdebugbar pre.sf-dump:after {
            content: "";
            visibility: hidden;
            display: block;
            height: 0;
            clear: both;
        }

        .phpdebugbar pre.sf-dump span {
            display: inline;
        }

        .phpdebugbar pre.sf-dump a {
            text-decoration: none;
            cursor: pointer;
            border: 0;
            outline: none;
            color: inherit;
        }

        .phpdebugbar pre.sf-dump img {
            max-width: 50em;
            max-height: 50em;
            margin: .5em 0 0 0;
            padding: 0;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAHUlEQVQY02O8zAABilCaiQEN0EeA8QuUcX9g3QEAAjcC5piyhyEAAAAASUVORK5CYII=) #D3D3D3;
        }

        .phpdebugbar pre.sf-dump .sf-dump-ellipsis {
            display: inline-block;
            overflow: visible;
            text-overflow: ellipsis;
            max-width: 5em;
            white-space: nowrap;
            overflow: hidden;
            vertical-align: top;
        }

        .phpdebugbar pre.sf-dump .sf-dump-ellipsis+.sf-dump-ellipsis {
            max-width: none;
        }

        .phpdebugbar pre.sf-dump code {
            display: inline;
            padding: 0;
            background: none;
        }

        .sf-dump-public.sf-dump-highlight,
        .sf-dump-protected.sf-dump-highlight,
        .sf-dump-private.sf-dump-highlight,
        .sf-dump-str.sf-dump-highlight,
        .sf-dump-key.sf-dump-highlight {
            background: rgba(111, 172, 204, 0.3);
            border: 1px solid #7DA0B1;
            border-radius: 3px;
        }

        .sf-dump-public.sf-dump-highlight-active,
        .sf-dump-protected.sf-dump-highlight-active,
        .sf-dump-private.sf-dump-highlight-active,
        .sf-dump-str.sf-dump-highlight-active,
        .sf-dump-key.sf-dump-highlight-active {
            background: rgba(253, 175, 0, 0.4);
            border: 1px solid #ffa500;
            border-radius: 3px;
        }

        .phpdebugbar pre.sf-dump .sf-dump-search-hidden {
            display: none !important;
        }

        .phpdebugbar pre.sf-dump .sf-dump-search-wrapper {
            font-size: 0;
            white-space: nowrap;
            margin-bottom: 5px;
            display: flex;
            position: -webkit-sticky;
            position: sticky;
            top: 5px;
        }

        .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>* {
            vertical-align: top;
            box-sizing: border-box;
            height: 21px;
            font-weight: normal;
            border-radius: 0;
            background: #FFF;
            color: #757575;
            border: 1px solid #BBB;
        }

        .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>input.sf-dump-search-input {
            padding: 3px;
            height: 21px;
            font-size: 12px;
            border-right: none;
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
            color: #000;
            min-width: 15px;
            width: 100%;
        }

        .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-next,
        .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-previous {
            background: #F2F2F2;
            outline: none;
            border-left: none;
            font-size: 0;
            line-height: 0;
        }

        .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-next {
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
        }

        .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-next>svg,
        .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-previous>svg {
            pointer-events: none;
            width: 12px;
            height: 12px;
        }

        .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-count {
            display: inline-block;
            padding: 0 5px;
            margin: 0;
            border-left: none;
            line-height: 21px;
            font-size: 12px;
        }

        .phpdebugbar pre.sf-dump,
        .phpdebugbar pre.sf-dump .sf-dump-default {
            word-wrap: break-word;
            white-space: pre-wrap;
            word-break: normal
        }

        .phpdebugbar pre.sf-dump .sf-dump-num {
            font-weight: bold;
            color: #1299DA
        }

        .phpdebugbar pre.sf-dump .sf-dump-const {
            font-weight: bold
        }

        .phpdebugbar pre.sf-dump .sf-dump-str {
            font-weight: bold;
            color: #3A9B26
        }

        .phpdebugbar pre.sf-dump .sf-dump-note {
            color: #1299DA
        }

        .phpdebugbar pre.sf-dump .sf-dump-ref {
            color: #7B7B7B
        }

        .phpdebugbar pre.sf-dump .sf-dump-public {
            color: #000000
        }

        .phpdebugbar pre.sf-dump .sf-dump-protected {
            color: #000000
        }

        .phpdebugbar pre.sf-dump .sf-dump-private {
            color: #000000
        }

        .phpdebugbar pre.sf-dump .sf-dump-meta {
            color: #B729D9
        }

        .phpdebugbar pre.sf-dump .sf-dump-key {
            color: #3A9B26
        }

        .phpdebugbar pre.sf-dump .sf-dump-index {
            color: #1299DA
        }

        .phpdebugbar pre.sf-dump .sf-dump-ellipsis {
            color: #A0A000
        }

        .phpdebugbar pre.sf-dump .sf-dump-ns {
            user-select: none;
        }

        .phpdebugbar pre.sf-dump .sf-dump-ellipsis-note {
            color: #1299DA
        }
    </style>
</head>

{{-- <body class="frontend-page header-normal is_single  "> --}}


<div class="bravo_wrap">


    <div class="bravo_detail_hotel">
        <div class="blog-breadcrumb hidden-xs">
            <div class="container">
                {{-- <ol class="ul" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li class="" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="http://localhost:8001" itemprop="item"><span itemprop="name">Home</span></a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li class=" " itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="http://localhost:8001/hotel" itemscope itemtype="https://schema.org/WebPage"
                            itemprop="item" itemid="http://localhost:8001/hotel"><span itemprop="name">Hotel</span></a>
                        <meta itemprop="position" content="2" />
                    </li>
                    <li class=" " itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="http://localhost:8001/location/paris" itemscope itemtype="https://schema.org/WebPage"
                            itemprop="item" itemid="http://localhost:8001/location/paris"><span
                                itemprop="name">Paris</span></a>
                        <meta itemprop="position" content="3" />
                    </li>
                    <li class=" active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <span itemprop="name">Hotel Stanford</span>
                        <meta itemprop="position" content="4" />
                    </li>
                </ol> --}}
            </div>
        </div>
        <div class="bravo_banner"
            style="background-image: url('http://localhost:8001/uploads/demo/hotel/hotel-featured-2.jpg')">
            <div class="container">
                <div class="bravo_gallery">
                    <div class="btn-group">
                        <a href="#" class="btn btn-transparent has-icon bravo-video-popup" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/bhOiLfkChPo" data-target="#myModal">
                            <i class="input-icon field-icon fa">
                                <svg height="18px" width="18px" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 24 24"
                                    style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                    <g fill="#FFFFFF">
                                        <path
                                            d="M2.25,24C1.009,24,0,22.991,0,21.75V2.25C0,1.009,1.009,0,2.25,0h19.5C22.991,0,24,1.009,24,2.25v19.5
                                            c0,1.241-1.009,2.25-2.25,2.25H2.25z M2.25,1.5C1.836,1.5,1.5,1.836,1.5,2.25v19.5c0,0.414,0.336,0.75,0.75,0.75h19.5
                                            c0.414,0,0.75-0.336,0.75-0.75V2.25c0-0.414-0.336-0.75-0.75-0.75H2.25z">
                                        </path>
                                        <path
                                            d="M9.857,16.5c-0.173,0-0.345-0.028-0.511-0.084C8.94,16.281,8.61,15.994,8.419,15.61c-0.11-0.221-0.169-0.469-0.169-0.716
                                            V9.106C8.25,8.22,8.97,7.5,9.856,7.5c0.247,0,0.495,0.058,0.716,0.169l5.79,2.896c0.792,0.395,1.114,1.361,0.719,2.153
                                            c-0.154,0.309-0.41,0.565-0.719,0.719l-5.788,2.895C10.348,16.443,10.107,16.5,9.857,16.5z M9.856,9C9.798,9,9.75,9.047,9.75,9.106
                                            v5.788c0,0.016,0.004,0.033,0.011,0.047c0.013,0.027,0.034,0.044,0.061,0.054C9.834,14.998,9.845,15,9.856,15
                                            c0.016,0,0.032-0.004,0.047-0.011l5.788-2.895c0.02-0.01,0.038-0.027,0.047-0.047c0.026-0.052,0.005-0.115-0.047-0.141l-5.79-2.895
                                            C9.889,9.004,9.872,9,9.856,9z">
                                        </path>
                                    </g>
                                </svg>
                            </i>Hotel Video
                        </a>
                    </div>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item bravo_embed_video" src=""
                                            allowscriptaccess="always" allow="autoplay"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bravo_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-9">
                        <div class="g-header">
                            <div class="left">
                                <div class="star-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h1>Hotel Stanford</h1>
                                <h2 class="address"><i class="fa fa-map-marker"></i>
                                    Arrondissement de Paris
                                </h2>
                            </div>
                            {{-- <div class="right">
                                <div class="review-score">
                                    <div class="head">
                                        <div class="left">
                                            <span class="head-rating">Excellent</span>
                                            <span class="text-rating">from 3 reviews</span>
                                        </div>
                                        <div class="score">
                                            4.7<span>/5</span>
                                        </div>
                                    </div>
                                    <div class="foot">
                                        100% of guests recommend
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="g-gallery">
                            <div class="fotorama" data-width="100%" data-thumbwidth="135" data-thumbheight="135"
                                data-thumbmargin="15" data-nav="thumbs" data-allowfullscreen="true">
                                <a href="http://localhost:8001/uploads/demo/hotel/gallery/hotel-gallery-1.jpg"
                                    data-thumb="http://localhost:8001/uploads/demo/hotel/gallery/hotel-gallery-1.jpg"
                                    data-alt="Gallery"></a>
                                <a href="http://localhost:8001/uploads/demo/hotel/gallery/hotel-gallery-2.jpg"
                                    data-thumb="http://localhost:8001/uploads/demo/hotel/gallery/hotel-gallery-2.jpg"
                                    data-alt="Gallery"></a>
                                <a href="http://localhost:8001/uploads/demo/hotel/gallery/hotel-gallery-3.jpg"
                                    data-thumb="http://localhost:8001/uploads/demo/hotel/gallery/hotel-gallery-3.jpg"
                                    data-alt="Gallery"></a>
                                <a href="http://localhost:8001/uploads/demo/hotel/gallery/hotel-gallery-4.jpg"
                                    data-thumb="http://localhost:8001/uploads/demo/hotel/gallery/hotel-gallery-4.jpg"
                                    data-alt="Gallery"></a>
                                <a href="http://localhost:8001/uploads/demo/hotel/gallery/hotel-gallery-5.jpg"
                                    data-thumb="http://localhost:8001/uploads/demo/hotel/gallery/hotel-gallery-5.jpg"
                                    data-alt="Gallery"></a>
                                <a href="http://localhost:8001/uploads/demo/hotel/gallery/hotel-gallery-6.jpg"
                                    data-thumb="http://localhost:8001/uploads/demo/hotel/gallery/hotel-gallery-6.jpg"
                                    data-alt="Gallery"></a>
                            </div>
                            <div class="social">
                                <div class="social-share">
                                    <span class="social-icon">
                                        <i class="icofont-share"></i>
                                    </span>
                                    <ul class="share-wrapper">
                                        <li>
                                            <a class="facebook"
                                                href="https://www.facebook.com/sharer/sharer.php?u=http://localhost:8001/hotel/hotel-stanford&amp;title=Hotel Stanford"
                                                target="_blank" rel="noopener" original-title="Facebook">
                                                <i class="fa fa-facebook fa-lg"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="twitter"
                                                href="https://twitter.com/share?url=http://localhost:8001/hotel/hotel-stanford&amp;title=Hotel Stanford"
                                                target="_blank" rel="noopener" original-title="Twitter">
                                                <i class="fa fa-twitter fa-lg"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="service-wishlist " data-id="1" data-type="hotel">
                                    <i class="fa fa-heart-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="g-overview">
                            <h3>Description</h3>
                            <div class="description">
                                <p>Built in 1986, Hotel Stanford is a distinct addition to New York (NY) and a smart
                                    choice for travelers. The excitement of the city center is only 0 KM away. No
                                    less exceptional is the hotel’s easy access to the city’s myriad attractions and
                                    landmarks, such as Toto Music Studio, British Virgin Islands Tourist Board,
                                    L’Atelier Du Chocolat. Start and end in San Francisco! With the in-depth
                                    cultural tour Northern California Summer 2019, you have a 8 day tour package
                                    taking you through San Francisco, USA and 9 other destinations in USA. Northern
                                    California Summer 2019 includes accommodation as well as an expert guide, meals,
                                    transport and more.</p>
                                <h4>HIGHLIGHTS</h4>
                                <ul>
                                    <li>Visit the Museum of Modern Art in Manhattan</li>
                                    <li>See amazing works of contemporary art, including Vincent van Gogh's The
                                        Starry Night</li>
                                    <li>Check out Campbell's Soup Cans by Warhol and The Dance (I) by Matisse</li>
                                    <li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li>
                                    <li>Enjoy free audio guides available in English, French, German, Italian,
                                        Spanish, Portuguese</li>
                                </ul>
                            </div>
                        </div>
                        {{-- <div id="hotel-rooms" class="hotel_rooms_form" v-cloak=""
                            :class="{ 'd-none': enquiry_type != 'book' }">
                            <h3 class="heading-section">Available Rooms</h3>
                            <div class="nav-enquiry" v-if="is_form_enquiry_and_book">
                                <div class="enquiry-item active">
                                    <span>Book</span>
                                </div>
                                <div class="enquiry-item" data-toggle="modal" data-target="#enquiry_form_modal">
                                    <span>Enquiry</span>
                                </div>
                            </div>
                            <div class="form-book">
                                <div class="form-search-rooms">
                                    <div class="d-flex form-search-row">
                                        <div class="col-md-4">
                                            <div class="form-group form-date-field form-date-search "
                                                @click="openStartDate" data-format="MM/DD/YYYY">
                                                <i class="fa fa-angle-down arrow"></i>
                                                <input type="text" class="start_date" ref="start_date"
                                                    style="height: 1px; visibility: hidden">
                                                <div class="date-wrapper form-content">
                                                    <label class="form-label">Check In - Out</label>
                                                    <div class="render check-in-render" v-html="start_date_html">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <i class="fa fa-angle-down arrow"></i>
                                                <div class="form-content dropdown-toggle" data-toggle="dropdown">
                                                    <label class="form-label">Guests</label>
                                                    <div class="render">
                                                        <span class="adults">
                                                            <span class="one">adults
                                                                <span v-if="adults < 2">Adult</span>
                                                                <span v-else>Adults</span>
                                                            </span>
                                                        </span>
                                                        -
                                                        <span class="children">
                                                            <span class="one"> children
                                                                <span v-if="children < 2">Child</span>
                                                                <span v-else>Children</span>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu select-guests-dropdown">
                                                    <div class="dropdown-item-row">
                                                        <div class="label">Adults</div>
                                                        <div class="val">
                                                            <span class="btn-minus2" data-input="adults"
                                                                @click="minusPersonType('adults')"><i
                                                                    class="icon ion-md-remove"></i></span>
                                                            <span class="count-display"><input type="number"
                                                                    v-model="adults" min="1" /></span>
                                                            <span class="btn-add2" data-input="adults"
                                                                @click="addPersonType('adults')"><i
                                                                    class="icon ion-ios-add"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item-row">
                                                        <div class="label">Children</div>
                                                        <div class="val">
                                                            <span class="btn-minus2" data-input="children"
                                                                @click="minusPersonType('children')"><i
                                                                    class="icon ion-md-remove"></i></span>
                                                            <span class="count-display"><input type="number"
                                                                    v-model="children" min="0" /></span>
                                                            <span class="btn-add2" data-input="children"
                                                                @click="addPersonType('children')"><i
                                                                    class="icon ion-ios-add"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-btn">
                                            <div class="g-button-submit">
                                                <button class="btn btn-primary btn-search" @click="checkAvailability"
                                                    :class="{ 'loading': onLoadAvailability }" type="submit">
                                                    Check Availability
                                                    <i v-show="onLoadAvailability" class="fa fa-spinner fa-spin"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="start_room_sticky"></div>
                                <div class="hotel_list_rooms" :class="{ 'loading': onLoadAvailability }">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="room-item" v-for="room in rooms">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-3">
                                                        <div class="image"
                                                            @click="showGallery($event,room.id,room.gallery)">
                                                            <img :src="room.image" alt="">
                                                            <div class="count-gallery"
                                                                v-if="typeof room.gallery !='undefined' && room.gallery && room.gallery.length > 1">
                                                                <i class="fa fa-picture-o"></i>
                                                                room . gallery . length
                                                            </div>
                                                        </div>
                                                        <div class="modal" :id="'modal_room_' + room.id"
                                                            tabindex="-1" role="dialog">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"> room . title
                                                                        </h5>
                                                                        <span class="c-pointer" data-dismiss="modal"
                                                                            aria-label="Close">
                                                                            <i class="input-icon field-icon fa">
                                                                                <img src="http://localhost:8001/images/ico_close.svg"
                                                                                    alt="close">
                                                                            </i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="fotorama" data-nav="thumbs"
                                                                            data-width="100%" data-auto="false"
                                                                            data-allowfullscreen="true">
                                                                            <a v-for="g in room.gallery"
                                                                                :href="g.large"></a>
                                                                        </div>
                                                                        <div class="list-attributes">
                                                                            <div class="attribute-item"
                                                                                v-for="term in room.terms">
                                                                                <h4 class="title">
                                                                                    term . parent . title </h4>
                                                                                <ul v-if="term.child">
                                                                                    <li
                                                                                        v-for="term_child in term.child">
                                                                                        <i class="input-icon field-icon"
                                                                                            v-bind:class="term_child.icon"
                                                                                            data-toggle="tooltip"
                                                                                            data-placement="top"
                                                                                            :title="term_child.title"></i>
                                                                                        term_child . title
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-6">
                                                        <div class="hotel-info">
                                                            <h3 class="room-name"
                                                                @click="showGallery($event,room.id,room.gallery)">
                                                                room . title </h3>
                                                            <ul class="room-meta">
                                                                <li v-if="room.size_html">
                                                                    <div class="item" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="Room Footage">
                                                                        <i
                                                                            class="input-icon field-icon icofont-ruler-compass-alt"></i>
                                                                        <span v-html="room.size_html"></span>
                                                                    </div>
                                                                </li>
                                                                <li v-if="room.beds_html">
                                                                    <div class="item" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="No. Beds">
                                                                        <i
                                                                            class="input-icon field-icon icofont-hotel"></i>
                                                                        <span v-html="room.beds_html"></span>
                                                                    </div>
                                                                </li>
                                                                <li v-if="room.adults_html">
                                                                    <div class="item" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="No. Adults">
                                                                        <i
                                                                            class="input-icon field-icon icofont-users-alt-4"></i>
                                                                        <span v-html="room.adults_html"></span>
                                                                    </div>
                                                                </li>
                                                                <li v-if="room.children_html">
                                                                    <div class="item" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="No. Children">
                                                                        <i
                                                                            class="input-icon field-icon fa-child fa"></i>
                                                                        <span v-html="room.children_html"></span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="room-attribute-item"
                                                                v-if="room.term_features">
                                                                <ul>
                                                                    <li v-for="term_child in room.term_features">
                                                                        <i class="input-icon field-icon"
                                                                            v-bind:class="term_child.icon"
                                                                            data-toggle="tooltip" data-placement="top"
                                                                            :title="term_child.title"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3" v-if="room.number">
                                                        <div class="col-price clear">
                                                            <div class="text-center">
                                                                <span class="price" v-html="room.price_html"></span>
                                                            </div>
                                                            <select v-if="room.number" v-model="room.number_selected"
                                                                class="custom-select">
                                                                <option value="0">0</option>
                                                                <option v-for="i in (1,room.number)"
                                                                    :value="i">
                                                                    i + ' ' + (i > 1 ? i18n . rooms : i18n . room)
                                                                    &nbsp;&nbsp; ( formatMoney(i * room . price) )
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hotel_room_book_status" v-if="total_price">
                                    <div class="row row_extra_service" v-if="extra_price.length">
                                        <div class="col-md-12">
                                            <div class="form-section-group">
                                                <label>Extra prices:</label>
                                                <div class="row">
                                                    <div class="col-md-6 extra-item"
                                                        v-for="(type,index) in extra_price">
                                                        <div class="extra-price-wrap d-flex justify-content-between">
                                                            <div class="flex-grow-1">
                                                                <label>
                                                                    <input type="checkbox" true-value="1"
                                                                        false-value="0" v-model="type.enable">
                                                                    type . name
                                                                    <div class="render" v-if="type.price_type">
                                                                        ( type . price_type )</div>
                                                                </label>
                                                            </div>
                                                            <div class="flex-shrink-0"> type . price_html
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row_total_price">
                                        <div class="col-md-6">
                                            <div class="extra-price-wrap d-flex justify-content-between">
                                                <div class="flex-grow-1">
                                                    <label>
                                                        Total Room:
                                                    </label>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    total_rooms
                                                </div>
                                            </div>
                                            <div class="extra-price-wrap d-flex justify-content-between"
                                                v-for="(type,index) in buyer_fees">
                                                <div class="flex-grow-1">
                                                    <label>
                                                        type . type_name
                                                        <span class="render" v-if="type.price_type">( type .
                                                            price_type )</span>
                                                        <i class="icofont-info-circle" v-if="type.desc"
                                                            data-toggle="tooltip" data-placement="top"
                                                            :title="type.type_desc"></i>
                                                    </label>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="unit" v-if='type.unit == "percent"'>
                                                        type . price %
                                                    </div>
                                                    <div class="unit" v-else>
                                                        formatMoney(type . price)
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="extra-price-wrap d-flex justify-content-between is_mobile">
                                                <div class="flex-grow-1">
                                                    <label>
                                                        Total Price:
                                                    </label>
                                                </div>
                                                <div class="total-room-price"> total_price_html </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="control-book">
                                                <div class="total-room-price">
                                                    <span> Total Price:</span> total_price_html
                                                </div>
                                                <div v-if="is_deposit_ready" class="total-room-price">
                                                    <span>Pay now</span>
                                                    pay_now_price_html
                                                </div>
                                                <button type="button" class="btn btn-primary"
                                                    @click="doSubmit($event)" :class="{ 'disabled': onSubmit }"
                                                    name="submit">
                                                    <span>Book Now</span>
                                                    <i v-show="onSubmit" class="fa fa-spinner fa-spin"></i>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="end_room_sticky"></div>
                                <div class="alert alert-warning" v-if="!firstLoad && !rooms.length">
                                    No room available with your selected date. Please change your search critical
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="modal fade" tabindex="-1" role="dialog" id="enquiry_form_modal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content enquiry_form_modal_form">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Enquiry</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="service_id" value="1">
                                        <input type="hidden" name="service_type" value="hotel">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="tawreed tech"
                                                name="enquiry_name" placeholder="Name *">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="admin@admin.com"
                                                name="enquiry_email" placeholder="Email *">
                                        </div>
                                        <div class="form-group" v-if="!enquiry_is_submit">
                                            <input type="text" class="form-control" value="0543798662"
                                                name="enquiry_phone" placeholder="Phone">
                                        </div>
                                        <div class="form-group" v-if="!enquiry_is_submit">
                                            <textarea class="form-control" placeholder="Note" name="enquiry_note"></textarea>
                                        </div>
                                        <div class="message_box"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary btn-submit-enquiry">Send now
                                            <i class="fa icon-loading fa-spinner fa-spin fa-fw"
                                                style="display: none"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="g-all-attribute is_mobile">
                            <div class="g-attributes property-type attr-5">
                                <h3>Property type</h3>
                                <div class="list-attributes">
                                    <div class="item apartments term-32">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Apartments
                                    </div>
                                    <div class="item hotels term-33">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Hotels
                                    </div>
                                    <div class="item homestays term-34">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Homestays
                                    </div>
                                    <div class="item villas term-35">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Villas
                                    </div>
                                    <div class="item boats term-36">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Boats
                                    </div>
                                    <div class="item motels term-37">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Motels
                                    </div>
                                    <div class="item resorts term-38">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Resorts
                                    </div>
                                    <div class="item lodges term-39">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Lodges
                                    </div>
                                    <div class="item holiday-homes term-40">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Holiday homes
                                    </div>
                                </div>
                            </div>
                            <div class="g-attributes facilities-1 attr-6">
                                <h3>Facilities</h3>
                                <div class="list-attributes">
                                    <div class="item wake-up-call term-42">
                                        <i class="icofont-wall-clock"></i>
                                        Wake-up call
                                    </div>
                                    <div class="item car-hire term-43">
                                        <i class="icofont-car-alt-3"></i>
                                        Car hire
                                    </div>
                                    <div class="item bicycle-hire term-44">
                                        <i class="icofont-bicycle-alt-2"></i>
                                        Bicycle hire
                                    </div>
                                    <div class="item flat-tv term-45">
                                        <i class="icofont-imac"></i>
                                        Flat Tv
                                    </div>
                                    <div class="item internet-wifi term-47">
                                        <i class="icofont-wifi-alt"></i>
                                        Internet – Wifi
                                    </div>
                                    <div class="item coffee-and-tea term-48">
                                        <i class="icofont-tea"></i>
                                        Coffee and tea
                                    </div>
                                </div>
                            </div>
                            <div class="g-attributes hotel-service attr-7">
                                <h3>Hotel Service</h3>
                                <div class="list-attributes">
                                    <div class="item fiesta-restaurant term-50">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Fiesta Restaurant
                                    </div>
                                    <div class="item hotel-transport-services term-51">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Hotel transport services
                                    </div>
                                    <div class="item free-luggage-deposit term-52">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Free luggage deposit
                                    </div>
                                    <div class="item laundry-services term-53">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Laundry Services
                                    </div>
                                    <div class="item pets-welcome term-54">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Pets welcome
                                    </div>
                                    <div class="item tickets term-55">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Tickets
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="g-rules">
                            <h3>Rules</h3>
                            <div class="description">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="key">Check In</div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="value"> 12:00AM </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="key">Check Out</div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="value"> 11:00AM </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="key">Hotel Policies</div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="item ">
                                            <div class="strong">Guarantee Policy</div>
                                            <div class="context">- A valid credit card will be required upon
                                                booking;
                                                - For credit card reservations, the same card(s) must be presented
                                                upon check in at the respective hotels;
                                                - Management reserves the right to cancel any reservations without
                                                notice if we are notified of any fraud or illegal activities
                                                associated with the full payments received.</div>
                                        </div>
                                        <div class="item ">
                                            <div class="strong">Children Policy</div>
                                            <div class="context">- Child under 5-year old: free of charge.
                                                - Child from 5-year old to under 12-year old: surcharge
                                                $10/person/room/night.
                                                - Child from 12-year old or extra Adult: surcharge
                                                $15/person/room/night.</div>
                                        </div>
                                        <div class="item  d-none ">
                                            <div class="strong">Cancellation/Amendment Policy</div>
                                            <div class="context">- If cancellation/amendment is made 72 hours
                                                prior to your arrival date, no fee will be charged.
                                                - If cancellation/amendment is made within 72 hours, including
                                                reservations made within 72 hours of your arrival, 1st night’s room
                                                rate and tax will be charged
                                                - In case of no-show, 100% room rate and tax will be charged.
                                                - Early Bird/Long Stay/Last Min/Package Rates are Non - changeable &
                                                Non - refundable</div>
                                        </div>
                                        <div class="item  d-none ">
                                            <div class="strong">Late check-out policy</div>
                                            <div class="context">- Late check-out is subject to room availability
                                                - 12:00 to 17:00 check-out: 50% room rate surcharge
                                                - After 17:00 check-out: 100% room rate surcharge</div>
                                        </div>
                                        <div class="btn-show-all">
                                            <span class="text">Show All</span>
                                            <i class="fa fa-caret-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="bravo-hr"></div>
                        {{--
                        <div class="g-location">
                            <div class="location-title">
                                <h3>Location</h3>
                                <div class="address">
                                    <i class="icofont-location-arrow"></i>
                                    Arrondissement de Paris
                                </div>
                            </div>

                            <div class="location-map">
                                <div id="map_content"></div>
                            </div>
                        </div> --}}
                        <div class="bravo-hr"></div>
                        {{-- <div class="bravo-reviews" id="bravo-reviews">
                            <h3>Reviews</h3>
                            <div class="review-box">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="review-box-score">
                                            <div class="review-score">
                                                4.7<span class="per-total">/5</span>
                                            </div>
                                            <div class="review-score-text">
                                                Excellent
                                            </div>
                                            <div class="review-score-base">
                                                Based on
                                                <span>
                                                    3 reviews
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="review-sumary">
                                            <div class="item">
                                                <div class="label">
                                                    Excellent
                                                </div>
                                                <div class="progress">
                                                    <div class="percent green" style="width: 67%"></div>
                                                </div>
                                                <div class="number">2</div>
                                            </div>
                                            <div class="item">
                                                <div class="label">
                                                    Very Good
                                                </div>
                                                <div class="progress">
                                                    <div class="percent green" style="width: 33%"></div>
                                                </div>
                                                <div class="number">1</div>
                                            </div>
                                            <div class="item">
                                                <div class="label">
                                                    Average
                                                </div>
                                                <div class="progress">
                                                    <div class="percent green" style="width: 0%"></div>
                                                </div>
                                                <div class="number">0</div>
                                            </div>
                                            <div class="item">
                                                <div class="label">
                                                    Poor
                                                </div>
                                                <div class="progress">
                                                    <div class="percent green" style="width: 0%"></div>
                                                </div>
                                                <div class="number">0</div>
                                            </div>
                                            <div class="item">
                                                <div class="label">
                                                    Terrible
                                                </div>
                                                <div class="progress">
                                                    <div class="percent green" style="width: 0%"></div>
                                                </div>
                                                <div class="number">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review-list">
                                <div class="review-item">
                                    <div class="review-item-head">
                                        <div class="media">
                                            <div class="media-left">
                                                <img class="avatar" src="http://localhost:8001/images/avatar.png"
                                                    alt=" ">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"> </h4>
                                                <div class="date">07/12/2023 11:10</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-item-body">
                                        <h4 class="title"> Easy way to discover the city </h4>
                                        <ul class="review-star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <div class="detail">
                                            Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id
                                            posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex
                                            pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie
                                            mnesarchum complectitur per te
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item">
                                    <div class="review-item-head">
                                        <div class="media">
                                            <div class="media-left">
                                                <img class="avatar" src="http://localhost:8001/images/avatar.png"
                                                    alt="System Admin">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">System Admin</h4>
                                                <div class="date">07/12/2023 11:10</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-item-body">
                                        <h4 class="title"> Nothing good this time </h4>
                                        <ul class="review-star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <div class="detail">
                                            Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id
                                            posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex
                                            pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie
                                            mnesarchum complectitur per te
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item">
                                    <div class="review-item-head">
                                        <div class="media">
                                            <div class="media-left">
                                                <img class="avatar" src="http://localhost:8001/images/avatar.png"
                                                    alt=" ">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"> </h4>
                                                <div class="date">07/12/2023 11:10</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-item-body">
                                        <h4 class="title"> Easy way to discover the city </h4>
                                        <ul class="review-star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <div class="detail">
                                            Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id
                                            posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex
                                            pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie
                                            mnesarchum complectitur per te
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review-pag-wrapper">
                                <div class="bravo-pagination">

                                </div>
                                <div class="review-pag-text">
                                    Showing 1 - 3 of 3 total
                                </div>
                            </div>
                            <div class="review-form">
                                <div class="title-form">
                                    Write a review
                                </div>
                                <div class="form-wrapper">
                                    <form action="http://localhost:8001/review" class="needs-validation" novalidate
                                        method="post">
                                        <input type="hidden" name="_token"
                                            value="vXshe4q7uxJCZyL1V8jPaNuOx2Cp89skdwSFD6BE">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" required class="form-control"
                                                        name="review_title" placeholder="Title">
                                                    <div class="invalid-feedback">Review title is required</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-8">
                                                <div class="form-group">
                                                    <textarea name="review_content" required class="form-control" placeholder="Review content" minlength="10"></textarea>
                                                    <div class="invalid-feedback">
                                                        Review content has at least 10 character
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-4">
                                                <div class="form-group review-items">
                                                    <div class="item">
                                                        <label>Service</label>
                                                        <input class="review_stats" type="hidden"
                                                            name="review_stats[Service]">
                                                        <div class="rates">
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <label>Organization</label>
                                                        <input class="review_stats" type="hidden"
                                                            name="review_stats[Organization]">
                                                        <div class="rates">
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <label>Friendliness</label>
                                                        <input class="review_stats" type="hidden"
                                                            name="review_stats[Friendliness]">
                                                        <div class="rates">
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <label>Area Expert</label>
                                                        <input class="review_stats" type="hidden"
                                                            name="review_stats[Area Expert]">
                                                        <div class="rates">
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <label>Safety</label>
                                                        <input class="review_stats" type="hidden"
                                                            name="review_stats[Safety]">
                                                        <div class="rates">
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <input type="hidden" name="review_service_id" value="1">
                                            <input type="hidden" name="review_service_type" value="hotel">
                                            <input id="submit" type="submit" name="submit" class="btn"
                                                value="Leave a Review">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <div class="owner-info widget-box">
                            <div class="media">
                                <div class="media-left">
                                    <a href="http://localhost:8001/profile/tawreed" class="avatar-cover"
                                        style="background-image: url('http://localhost:8001/uploads/0000/1/2023/07/12/logo-t.png')">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a class="author-link"
                                            href="http://localhost:8001/profile/tawreed">tawreed tech</a>
                                        <img data-toggle="tooltip" data-placement="top"
                                            src="http://localhost:8001/icon/ico-not-vefified-1.svg"
                                            title="Not verified" alt="Verified">
                                    </h4>
                                    <p>Member Since Jul 2023</p>
                                </div>
                            </div>
                        </div>
                        <div class="bravo-list-hotel-related-widget">
                            <h3 class="heading">Related Hotel</h3>
                            <div class="list-item">
                                <div class="item">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="http://localhost:8001/hotel/hotel-wbf-homachi">
                                                <img class='img-responsive lazy'
                                                    data-src=http://localhost:8001/uploads/demo/space/space-6.jpg
                                                    alt='Hotel WBF Hommachi'>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="star-rate">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="media-heading">
                                                <a href="http://localhost:8001/hotel/hotel-wbf-homachi">
                                                    Hotel WBF Hommachi
                                                </a>
                                            </h4>
                                            <div class="price-wrapper">
                                                from
                                                <span class="price">$350</span>
                                                <span class="unit">/night</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="http://localhost:8001/hotel/castello-casole-hotel">
                                                <img class='img-responsive lazy'
                                                    data-src=http://localhost:8001/uploads/demo/space/space-7.jpg
                                                    alt='Castello Casole Hotel'>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="star-rate">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="media-heading">
                                                <a href="http://localhost:8001/hotel/castello-casole-hotel">
                                                    Castello Casole Hotel
                                                </a>
                                            </h4>
                                            <div class="price-wrapper">
                                                from
                                                <span class="price">$350</span>
                                                <span class="unit">/night</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="http://localhost:8001/hotel/redac-gateway-hotel">
                                                <img class='img-responsive lazy'
                                                    data-src=http://localhost:8001/uploads/demo/space/space-8.jpg
                                                    alt='Redac Gateway Hotel'>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="star-rate">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="media-heading">
                                                <a href="http://localhost:8001/hotel/redac-gateway-hotel">
                                                    Redac Gateway Hotel
                                                </a>
                                            </h4>
                                            <div class="price-wrapper">
                                                from
                                                <span class="price">$500</span>
                                                <span class="unit">/night</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="http://localhost:8001/hotel/parian-holiday-villas">
                                                <img class='img-responsive lazy'
                                                    data-src=http://localhost:8001/uploads/demo/space/space-13.jpg
                                                    alt='Parian Holiday Villas'>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="star-rate">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="media-heading">
                                                <a href="http://localhost:8001/hotel/parian-holiday-villas">
                                                    Parian Holiday Villas
                                                </a>
                                            </h4>
                                            <div class="price-wrapper">
                                                from
                                                <span class="price">$550</span>
                                                <span class="unit">/night</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="g-all-attribute is_pc">
                            <div class="g-attributes property-type attr-5">
                                <h3>Property type</h3>
                                <div class="list-attributes">
                                    <div class="item apartments term-32">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Apartments
                                    </div>
                                    <div class="item hotels term-33">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Hotels
                                    </div>
                                    <div class="item homestays term-34">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Homestays
                                    </div>
                                    <div class="item villas term-35">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Villas
                                    </div>
                                    <div class="item boats term-36">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Boats
                                    </div>
                                    <div class="item motels term-37">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Motels
                                    </div>
                                    <div class="item resorts term-38">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Resorts
                                    </div>
                                    <div class="item lodges term-39">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Lodges
                                    </div>
                                    <div class="item holiday-homes term-40">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Holiday homes
                                    </div>
                                </div>
                            </div>
                            <div class="g-attributes facilities-1 attr-6">
                                <h3>Facilities</h3>
                                <div class="list-attributes">
                                    <div class="item wake-up-call term-42">
                                        <i class="icofont-wall-clock"></i>
                                        Wake-up call
                                    </div>
                                    <div class="item car-hire term-43">
                                        <i class="icofont-car-alt-3"></i>
                                        Car hire
                                    </div>
                                    <div class="item bicycle-hire term-44">
                                        <i class="icofont-bicycle-alt-2"></i>
                                        Bicycle hire
                                    </div>
                                    <div class="item flat-tv term-45">
                                        <i class="icofont-imac"></i>
                                        Flat Tv
                                    </div>
                                    <div class="item internet-wifi term-47">
                                        <i class="icofont-wifi-alt"></i>
                                        Internet – Wifi
                                    </div>
                                    <div class="item coffee-and-tea term-48">
                                        <i class="icofont-tea"></i>
                                        Coffee and tea
                                    </div>
                                </div>
                            </div>
                            <div class="g-attributes hotel-service attr-7">
                                <h3>Hotel Service</h3>
                                <div class="list-attributes">
                                    <div class="item fiesta-restaurant term-50">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Fiesta Restaurant
                                    </div>
                                    <div class="item hotel-transport-services term-51">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Hotel transport services
                                    </div>
                                    <div class="item free-luggage-deposit term-52">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Free luggage deposit
                                    </div>
                                    <div class="item laundry-services term-53">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Laundry Services
                                    </div>
                                    <div class="item pets-welcome term-54">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Pets welcome
                                    </div>
                                    <div class="item tickets term-55">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Tickets
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

        </div>
    </div>




    <div id="cdn-browser-modal" class="modal fade">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div id="cdn-browser" class="cdn-browser d-flex flex-column" v-cloak
                    :class="{ is_loading: isLoading }">
                    <div class="files-nav flex-shrink-0">
                        <div class="d-flex justify-content-between">
                            <div class="col-left d-flex align-items-center">
                                <div class="filter-item">
                                    <input type="text" placeholder="Search file name...." class="form-control"
                                        v-model="filter.s" @keyup.enter="filter.page = 1;reloadLists()">
                                </div>
                                <div class="filter-item">
                                    <button class="btn btn-default" @click="reloadAll()">
                                        <i class="fa fa-search"></i> Search</button>
                                </div>
                                <div class="filter-item">
                                    <small><i>Total: total files</i></small>
                                </div>
                            </div>
                            <div class="div">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" @click="setViewType('grid')" class="btn"
                                        :class="viewType == 'grid' ? 'btn-secondary' : 'btn-outline-secondary'"><i
                                            class="fa fa-th"></i></button>
                                    <button type="button" @click="setViewType('list')" class="btn"
                                        :class="viewType != 'grid' ? 'btn-secondary' : 'btn-outline-secondary'"><i
                                            class="fa fa-bars"></i></button>
                                </div>
                            </div>
                            <div class="col-right">
                                <i class="fa-spin fa fa-spinner icon-loading active" v-show="isLoading"></i>
                                <button class="btn btn-primary mr-2" @click="addFolder">
                                    <span><i class="fa fa-folder"></i> Add Folder</span>
                                </button>
                                <button class="btn btn-success btn-pick-files">
                                    <span><i class="fa fa-upload"></i> Upload</span>
                                    <input multiple :accept="accept_type" type="file" name="files[]"
                                        ref="files">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="upload-new" v-show="showUploader" display="none">
                        <input type="file" name="filepond[]" class="my-pond">
                    </div>
                    <div class="files-list">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a @click="toFolderRoot" href="#">Home</a>
                                </li>
                                <li v-for="(item,index) in breadcrumbs" class="breadcrumb-item active"
                                    aria-current="page"><a @click.prevent="showFolder(item,index)" href="#">
                                        item . name </a></li>
                            </ol>
                        </nav>
                        <div class="border-top border-left mb-3 px-3" v-if="viewType == 'list'">
                            <div class="row font-weight-bold " style="font-size: 16px">
                                <div class="col-sm-6 py-2 border-bottom border-right">Name</div>
                                <div class="col-sm-2 py-2 border-bottom border-right">Type</div>
                                <div class="col-sm-2 py-2 border-bottom border-right">Created At</div>
                                <div class="col-sm-2 py-2 border-bottom border-right">Size</div>
                            </div>
                            <folder-item @deleted="deletedFolder" @toggle-edit="toggleEditFolder"
                                @dblclick="showFolder(folder)" @update="updateFolder" :view-type="viewType"
                                v-for="(folder,index) in folders" :index="index" :key="'folder-' + index"
                                :folder="folder"></folder-item>
                            <file-item v-for="(file,index) in files" :key="index" :view-type="viewType"
                                :selected="selected" :file="file"
                                v-on:select-file="selectFile"></file-item>
                        </div>
                        <div class="files-wraps " v-if="viewType == 'grid'" :class="'view-' + viewType">
                            <folder-item @deleted="deletedFolder" @toggle-edit="toggleEditFolder"
                                @dblclick="showFolder(folder)" @update="updateFolder"
                                v-for="(folder,index) in folders" :index="index" :key="'folder-' + index"
                                :folder="folder"></folder-item>
                            <file-item v-for="(file,index) in files" :key="index" :view-type="viewType"
                                :selected="selected" :file="file"
                                v-on:select-file="selectFile"></file-item>
                        </div>
                        <p class="no-files-text text-center" v-show="!total && apiFinished" style="display: none">
                            No file found</p>
                        <div class="text-center" v-if="totalPage > 1">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item" :class="{ disabled: filter.page <= 1 }">
                                        <a class="page-link" v-if="filter.page <=1">Previous</a>
                                        <a class="page-link" href="#" v-if="filter.page > 1"
                                            v-on:click="changePage(filter.page-1,$event)">Previous</a>
                                    </li>
                                    <li class="page-item" v-if="p >= (filter.page-3) && p <= (filter.page+3)"
                                        :class="{ active: p == filter.page }" v-for="p in totalPage"
                                        @click="changePage(p,$event)">
                                        <a class="page-link" href="#"> p </a>
                                    </li>
                                    <li class="page-item" :class="{ disabled: filter.page >= totalPage }">
                                        <a v-if="filter.page >= totalPage" class="page-link">Next</a>
                                        <a href="#" class="page-link" v-if="filter.page < totalPage"
                                            v-on:click="changePage(filter.page+1,$event)">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="browser-actions d-flex justify-content-between flex-shrink-0" v-if="selected.length">
                        <div class="col-left" v-show="selected.length">
                            <div class="control-remove" v-if="selected && selected.length">
                                <button class="btn btn-danger" @click="removeFiles">Delete file</button>
                            </div>
                            <div class="control-info" v-if="selected && selected.length">
                                <div class="count-selected"> selected . length file selected</div>
                                <div class="clear-selected" @click="selected=[]"><i>unselect</i></div>
                            </div>
                        </div>
                        <div class="col-right" v-show="selected.length">
                            <button class="btn btn-primary" :class="{ disabled: !selected.length }"
                                @click="sendFiles">Use file</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/x-template" id="file-item-template">
    <div :class="viewType == 'grid'  ? 'file-item' : 'file-list-item'" >
        <div class="row hover:bg-f5f5f5 cursor-pointer" v-if="viewType == 'list'" @click="selectFile(file)" :class="{'active':selected.indexOf(file.id) !== -1}">
            <div class="col-sm-6 py-1 border-right border-bottom">
                <span v-html="getFileThumb(file)" class="mr-2 item-preview"></span>  file.file_name </div>
            <div class="col-sm-2 py-1  border-right border-bottom">file.file_extension</div>
            <div class="col-sm-2 py-1  border-right border-bottom">file.created_at</div>
            <div class="col-sm-1 py-1 border-bottom">humanFileSize(file.file_size)</div>
            <div class="col-sm-1 py-1  border-right border-bottom d-flex justify-content-end">
                <a :href="file.full_size" target="_blank" title="View file"><i class=" fa fa-eye"></i></a>
            </div>
        </div>
        <div v-if="viewType == 'grid'" class="inner" :class="{active:selected.indexOf(file.id) !== -1 }" @click="selectFile(file)" :title="file.file_name">
            <div class="file-thumb" v-if="viewType=='grid'" v-html="getFileThumb(file)">
                </div>
                <div class="file-name">file.file_name</div>
                <span class="file-checked-status" v-show="selected.indexOf(file.id) !== -1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M186.301 339.893L96 249.461l-32 30.507L186.301 402 448 140.506 416 110z"/></svg>
            </span>
        </div>
    </div>
</script>
    <script type="text/x-template" id="folder-item-template">
    <div :class="viewType == 'grid'  ? 'file-item folder-item' : 'folder-item'" @dblclick="$emit('dblclick',folder,index)">
        <div class="row hover:bg-f5f5f5 cursor-pointer" v-if="viewType == 'list'">
            <div class="col-sm-6 py-1 border-right border-bottom">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-grow-1 align-items-center">
                        <div>
                            <img src="/icon/folder.png" width="20px" height="auto" class="mr-2 flex-shrink-0" alt="">
                        </div>
                        <div class="text-center font-weight-medium" v-if="!folder.onEdit">folder.name</div>
                        <div class="" v-if="folder.onEdit">
                            <input ref="input" type="text" @blur="saveName" class="form-control" v-model="folder_name" >
                        </div>
                    </div>
                    <div>
                        <a href="#" class="btn-edit btn-sm position-absolute" @click.prevent="openEdit"><i class="fa fa-edit"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 py-1 border-right border-bottom">Folder</div>
            <div class="col-sm-2 py-1 border-right border-bottom"> folder.created_at </div>
            <div class="col-sm-2 py-1 border-right border-bottom d-flex justify-content-end">
                <a href="#" class="btn-sm text-danger" title="Delete this folder" @click.prevent="deleteFolder"><i class="fa fa-trash"></i></a>
            </div>
        </div>
        <div v-if="viewType == 'grid'" class="inner d-flex flex-column  position-relative">
            <div class="file-thumb flex-grow-1 d-flex align-items-center justify-content-center" style="background: #7b7d7e">
                <i class="fa fa-folder-o" style="font-size: 90px;color:white"></i>
            </div>
            <div class="text-center font-weight-medium p-2" v-if="!folder.onEdit">folder.name</div>
            <div class="" v-if="folder.onEdit">
                <input ref="input" type="text" @blur="saveName" class="form-control" v-model="folder_name" >
            </div>
            <a href="#" class="btn-edit btn btn-sm btn-warning position-absolute top-0 right-0 m-2" @click.prevent="openEdit"><i class="fa fa-edit"></i></a>
        </div>
    </div>
</script>
    <link rel="stylesheet" href="http://localhost:8001/libs/flags/css/flag-icon.min.css">




    <script src="http://localhost:8001/libs/lazy-load/intersection-observer.js"></script>
    <script async src="http://localhost:8001/libs/lazy-load/lazyload.min.js"></script>
    <script>
        // Set the options to make LazyLoad self-initialize
        window.lazyLoadOptions = {
            elements_selector: ".lazy",
            // ... more custom settings?
        };

        // Listen to the initialization event and get the instance of LazyLoad
        window.addEventListener('LazyLoad::Initialized', function(event) {
            window.lazyLoadInstance = event.detail.instance;
        }, false);
    </script>
    <script src="http://localhost:8001/libs/lodash.min.js"></script>
    <script src="http://localhost:8001/libs/jquery-3.6.3.min.js"></script>
    <script src="http://localhost:8001/libs/vue/vue.js"></script>
    {{-- <script src="http://localhost:8001/libs/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
    <script src="http://localhost:8001/libs/bootbox/bootbox.min.js"></script>
    <script src="http://localhost:8001/module/media/js/browser.js?_ver=3.2.1"></script>
    <script src="http://localhost:8001/libs/carousel-2/owl.carousel.min.js"></script>
    <script type="text/javascript" src="http://localhost:8001/libs/daterange/moment.min.js"></script>
    <script type="text/javascript" src="http://localhost:8001/libs/daterange/daterangepicker.min.js"></script>
    <script src="http://localhost:8001/libs/select2/js/select2.min.js"></script>
    <script src="http://localhost:8001/js/functions.js?_ver=3.2.1"></script>

    <script src="http://localhost:8001/libs/pusher.min.js"></script>
    <script src="http://localhost:8001/js/home.js?_ver=3.2.1"></script>






    <script src='https://maps.googleapis.com/maps/api/js?key=&libraries=places'></script>
    <script src='https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js'></script>
    <script src='http://localhost:8001/libs/infobox.js'></script>
    <script src='http://localhost:8001/module/core/js/map-engine.js?_ver=3.2.1'></script>
    {{-- <script>
            jQuery(function($) {
                new BravoMapEngine('map_content', {
                    disableScripts: true,
                    fitBounds: true,
                    center: [19.148665, 72.839670],
                    zoom: 12,
                    ready: function(engineMap) {
                        engineMap.addMarker([19.148665, 72.839670], {
                            icon_options: {
                                iconUrl: "http://localhost:8001/images/icons/png/pin.png"
                            }
                        });
                    }
                });
            })
        </script>
        <script>
            var bravo_booking_data = {
                "id": 1,
                "person_types": [],
                "max": 0,
                "open_hours": [],
                "extra_price": [{
                    "name": "Service VIP ",
                    "price": "200",
                    "type": "one_time",
                    "number": 0,
                    "enable": 0,
                    "price_html": "$200",
                    "price_type": ""
                }, {
                    "name": "Breakfasts",
                    "price": "100",
                    "type": "one_time",
                    "number": 0,
                    "enable": 0,
                    "price_html": "$100",
                    "price_type": ""
                }],
                "minDate": "08\/14\/2023",
                "max_guests": 1,
                "buyer_fees": [{
                    "name": "Service fee",
                    "desc": "This helps us run our platform and offer services like 24\/7 support on your trip.",
                    "name_ja": "\u30b5\u30fc\u30d3\u30b9\u6599",
                    "desc_ja": "\u3053\u308c\u306b\u3088\u308a\u3001\u5f53\u793e\u306e\u30d7\u30e9\u30c3\u30c8\u30d5\u30a9\u30fc\u30e0\u3092\u5b9f\u884c\u3057\u3001\u65c5\u884c\u4e2d\u306b",
                    "price": "100",
                    "type": "one_time",
                    "type_name": "Service fee",
                    "type_desc": "This helps us run our platform and offer services like 24\/7 support on your trip.",
                    "price_type": ""
                }],
                "i18n": {
                    "date_required": "Please select check-in and check-out date",
                    "rooms": "rooms",
                    "room": "room"
                },
                "start_date": "",
                "start_date_html": "Please select",
                "end_date": "",
                "deposit": false,
                "deposit_type": "",
                "deposit_amount": "",
                "deposit_fomular": "default",
                "is_form_enquiry_and_book": true,
                "enquiry_type": "book"
            }
            var bravo_booking_i18n = {
                no_date_select: 'Please select Start and End date',
                no_guest_select: 'Please select at least one guest',
                load_dates_url: 'http://localhost:8001/user/space/availability/loadDates',
                name_required: 'Name is Required',
                email_required: 'Email is Required',
            };
        </script> --}}
    <script type="text/javascript" src="http://localhost:8001/libs/ion_rangeslider/js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="http://localhost:8001/libs/fotorama/fotorama.js"></script>
    <script type="text/javascript" src="http://localhost:8001/libs/sticky/jquery.sticky.js"></script>
    <script type="text/javascript" src="http://localhost:8001/module/hotel/js/single-hotel.js?_ver=3.2.1"></script>

</div>
