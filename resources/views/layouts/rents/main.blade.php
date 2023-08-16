@extends('layouts.user.main')

@push('head')

    <head>


        {{-- <link href="{{asset('booking/libs/bootstrap/css/bootstrap.css')}}" rel="stylesheet"> --}}
        <link href="{{ asset('booking/libs/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('booking/libs/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('booking/libs/icofont/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('booking/libs/select2/css/select2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('booking/dist/frontend/css/notification.css') }}" rel="newest stylesheet">
        <link href="{{ asset('booking/dist/frontend/css/app.css?_ver=3.2.1') }}" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ asset('booking/libs/daterange/daterangepicker.css') }}">
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel='stylesheet' id='google-font-css-css'
            href='https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500%2C600&display=swap' type='text/css'
            media='all' />



        <link href="{{ asset('booking/dist/frontend/module/hotel/css/hotel.css?_ver=3.2.1') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('booking/libs/ion_rangeslider/css/ion.rangeSlider.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('booking/libs/fotorama/fotorama.css') }}" />

        <link href="{{ asset('booking/custom-css') }}" rel="stylesheet">
        <link href="{{ asset('booking/libs/carousel-2/owl.carousel.css') }}" rel="stylesheet">



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
@endpush
{{-- <body class="frontend-page header-normal is_single  "> --}}

@section('content')
    @yield('rents-content')
@endsection

@push('scripts')
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
    <link rel="stylesheet" href="{{ asset('booking/libs/flags/css/flag-icon.min.css') }}">




    <script src="{{ asset('booking/libs/lazy-load/intersection-observer.js') }}"></script>
    <script async src="{{ asset('booking/libs/lazy-load/lazyload.min.js') }}"></script>
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
    <script src="{{ asset('booking/libs/lodash.min.js') }}"></script>
    <script src="{{ asset('booking/libs/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('booking/libs/vue/vue.js') }}"></script>
    {{-- <script src="{{asset('booking/libs/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
    <script src="{{ asset('booking/libs/bootbox/bootbox.min.js') }}"></script>
    <script src="{{ asset('booking/module/media/js/browser.js?_ver=3.2.1') }}"></script>
    <script src="{{ asset('booking/libs/carousel-2/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('booking/libs/daterange/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('booking/libs/daterange/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('booking/libs/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('booking/js/functions.js?_ver=3.2.1') }}"></script>

    <script src="{{ asset('booking/libs/pusher.min.js') }}"></script>
    <script src="{{ asset('booking/js/home.js?_ver=3.2.1') }}"></script>






    <script src='https://maps.googleapis.com/maps/api/js?key=&libraries=places'></script>
    <script src='https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js'></script>
    <script src='{{ asset(' booking/libs/infobox.js') }}'></script>
    <script src='{{ asset(' booking/module/core/js/map-engine.js?_ver=3.2.1') }}'></script>
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
                                iconUrl: "{{asset('booking/images/icons/png/pin.png"
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
                load_dates_url: '{{asset('booking/user/space/availability/loadDates',
                name_required: 'Name is Required',
                email_required: 'Email is Required',
            };
        </script> --}}
    <script type="text/javascript" src="{{ asset('booking/libs/ion_rangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('booking/libs/fotorama/fotorama.js') }}"></script>
    <script type="text/javascript" src="{{ asset('booking/libs/sticky/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('booking/module/hotel/js/single-hotel.js?_ver=3.2.1') }}"></script>
@endpush
