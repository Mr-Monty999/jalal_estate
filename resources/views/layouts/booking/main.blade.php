

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="vXshe4q7uxJCZyL1V8jPaNuOx2Cp89skdwSFD6BE">
    <link rel="icon" type="image/png" href="http://localhost:8001/uploads/demo/general/favicon.png" />

    <title>Hotel Stanford - Booking Core</title>
    <meta name="description" content="" />

    <meta property="og:url" content="http://localhost:8001/hotel/hotel-stanford" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Hotel Stanford" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="http://localhost:8001/uploads/demo/space/space-5.jpg" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Hotel Stanford">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="http://localhost:8001/uploads/demo/space/space-5.jpg">
    <link rel="canonical" href="http://localhost:8001/hotel/hotel-stanford" />
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


    {{-- <script>
        var bookingCore = {
            url: 'http://localhost:8001',
            url_root: 'http://localhost:8001',
            admin_url: 'http://localhost:8001/admin',
            booking_decimals: 0,
            thousand_separator: '.',
            decimal_separator: ',',
            currency_position: 'left',
            currency_symbol: '$',
            currency_rate: '1',
            date_format: 'MM/DD/YYYY',
            map_provider: 'gmap',
            map_gmap_key: '',
            map_options: {
                map_lat_default: '',
                map_lng_default: '',
                map_clustering: 'on',
                map_fit_bounds: 'on',
            },
            routes: {
                login: 'http://localhost:8001/login',
                register: 'http://localhost:8001/register',
                checkout: 'http://localhost:8001/booking/doCheckout'
            },
            currentUser: 1,
            isAdmin: 1,
            rtl: false,
            markAsRead: 'http://localhost:8001/notify/markAsRead',
            markAllAsRead: 'http://localhost:8001/notify/markAllAsRead',
            loadNotify: 'http://localhost:8001/notify/notifications',
            pusher_api_key: '',
            pusher_cluster: '',
            language: 'en',
            module: {}
        };
        bookingCore.media = {
            groups: {
                "default": {
                    "ext": ["jpg", "jpeg", "png", "gif", "bmp", "docx"],
                    "mime": ["image\/png", "image\/jpeg", "image\/gif", "image\/bmp",
                        "application\/vnd.openxmlformats-officedocument.wordprocessingml.document"
                    ],
                    "max_size": 20000000,
                    "max_width": 4000,
                    "max_height": 4000
                },
                "image": {
                    "ext": ["jpg", "jpeg", "png", "gif", "bmp"],
                    "mime": ["image\/png", "image\/jpeg", "image\/gif", "image\/bmp"],
                    "max_size": 20000000,
                    "max_width": 4000,
                    "max_height": 4000
                }
            },
        }
        bookingCore.module.hotel = 'http://localhost:8001/hotel';
        bookingCore.module.space = 'http://localhost:8001/space';
        bookingCore.module.car = 'http://localhost:8001/car';
        bookingCore.module.event = 'http://localhost:8001/event';
        bookingCore.module.tour = 'http://localhost:8001/tour';
        bookingCore.module.flight = 'http://localhost:8001/flight';
        bookingCore.module.boat = 'http://localhost:8001/boat';
        var i18n = {
            warning: "Warning",
            success: "Success",
            confirm_delete: "Do you want to delete?",
            confirm: "Confirm",
            cancel: "Cancel",
        };
        var daterangepickerLocale = {
            "applyLabel": "Apply",
            "cancelLabel": "Cancel",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "first_day_of_week": 1,
            "daysOfWeek": [
                "Su",
                "Mo",
                "Tu",
                "We",
                "Th",
                "Fr",
                "Sa"
            ],
            "monthNames": [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ],
        };
    </script> --}}
    <!-- Styles -->
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
                    <ol class="ul" itemscope itemtype="https://schema.org/BreadcrumbList">
                        <li class="" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a href="http://localhost:8001" itemprop="item"><span itemprop="name">Home</span></a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li class=" " itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a href="http://localhost:8001/hotel" itemscope itemtype="https://schema.org/WebPage"
                                itemprop="item" itemid="http://localhost:8001/hotel"><span
                                    itemprop="name">Hotel</span></a>
                            <meta itemprop="position" content="2" />
                        </li>
                        <li class=" " itemprop="itemListElement" itemscope
                            itemtype="https://schema.org/ListItem">
                            <a href="http://localhost:8001/location/paris" itemscope
                                itemtype="https://schema.org/WebPage" itemprop="item"
                                itemid="http://localhost:8001/location/paris"><span itemprop="name">Paris</span></a>
                            <meta itemprop="position" content="3" />
                        </li>
                        <li class=" active" itemprop="itemListElement" itemscope
                            itemtype="https://schema.org/ListItem">
                            <span itemprop="name">Hotel Stanford</span>
                            <meta itemprop="position" content="4" />
                        </li>
                    </ol>
                </div>
            </div>
            <div class="bravo_banner"
                style="background-image: url('http://localhost:8001/uploads/demo/hotel/hotel-featured-2.jpg')">
                <div class="container">
                    <div class="bravo_gallery">
                        <div class="btn-group">
                            <a href="#" class="btn btn-transparent has-icon bravo-video-popup"
                                data-toggle="modal" data-src="https://www.youtube.com/embed/bhOiLfkChPo"
                                data-target="#myModal">
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
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
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
                                <div class="right">
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
                                </div>
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
                            <div id="hotel-rooms" class="hotel_rooms_form" v-cloak=""
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
                                                    <button class="btn btn-primary btn-search"
                                                        @click="checkAvailability"
                                                        :class="{ 'loading': onLoadAvailability }" type="submit">
                                                        Check Availability
                                                        <i v-show="onLoadAvailability"
                                                            class="fa fa-spinner fa-spin"></i>
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
                                                                            <span class="c-pointer"
                                                                                data-dismiss="modal"
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
                                                                                data-toggle="tooltip"
                                                                                data-placement="top"
                                                                                :title="term_child.title"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3" v-if="room.number">
                                                            <div class="col-price clear">
                                                                <div class="text-center">
                                                                    <span class="price"
                                                                        v-html="room.price_html"></span>
                                                                </div>
                                                                <select v-if="room.number"
                                                                    v-model="room.number_selected"
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
                                                            <div
                                                                class="extra-price-wrap d-flex justify-content-between">
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
                            </div>
                            <div class="modal fade" tabindex="-1" role="dialog" id="enquiry_form_modal">
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
                            </div>
                            <div class="g-all-attribute is_mobile">
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
                            </div>
                            <div class="g-rules">
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
                            </div>
                            <div class="bravo-hr"></div>

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
                            </div>
                            <div class="bravo-hr"></div>
                            <div class="bravo-reviews" id="bravo-reviews">
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
                                        <form action="http://localhost:8001/review" class="needs-validation"
                                            novalidate method="post">
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
                            </div>
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
                            <div class="g-all-attribute is_pc">
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
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="bravo_footer">
            <div class="mailchimp">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                            <div class="row">
                                <div class="col-xs-12  col-md-7 col-lg-6">
                                    <div class="media ">
                                        <div class="media-left hidden-xs">
                                            <i class="icofont-island-alt"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Get Updates &amp; More</h4>
                                            <p>Thoughtful thoughts to your inbox</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-5 col-lg-6">
                                    <form action="http://localhost:8001/newsletter/subscribe"
                                        class="subcribe-form bravo-subscribe-form bravo-form">
                                        <input type="hidden" name="_token"
                                            value="vXshe4q7uxJCZyL1V8jPaNuOx2Cp89skdwSFD6BE">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control email-input"
                                                placeholder="Your Email">
                                            <button type="submit" class="btn-submit">Subscribe
                                                <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                            </button>
                                        </div>
                                        <div class="form-mess"></div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="nav-footer">
                                <div class="title">
                                    NEED HELP?
                                </div>
                                <div class="context">
                                    <div class="contact">
                                        <div class="c-title">
                                            Call Us
                                        </div>
                                        <div class="sub">
                                            + 00 222 44 5678
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <div class="c-title">
                                            Email for Us
                                        </div>
                                        <div class="sub">
                                            hello@yoursite.com
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <div class="c-title">
                                            Follow Us
                                        </div>
                                        <div class="sub">
                                            <a href="#">
                                                <i class="icofont-facebook"></i>
                                            </a>
                                            <a href="#">
                                                <i class="icofont-twitter"></i>
                                            </a>
                                            <a href="#">
                                                <i class="icofont-youtube-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="nav-footer">
                                <div class="title">
                                    COMPANY
                                </div>
                                <div class="context">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Community Blog</a></li>
                                        <li><a href="#">Rewards</a></li>
                                        <li><a href="#">Work with Us</a></li>
                                        <li><a href="#">Meet the Team</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="nav-footer">
                                <div class="title">
                                    SUPPORT
                                </div>
                                <div class="context">
                                    <ul>
                                        <li><a href="#">Account</a></li>
                                        <li><a href="#">Legal</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Affiliate Program</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="nav-footer">
                                <div class="title">
                                    SETTINGS
                                </div>
                                <div class="context">
                                    <ul>
                                        <li><a href="#">Setting 1</a></li>
                                        <li><a href="#">Setting 2</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right">
                <div class="container context">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Copyright © 2019 by Booking Core</p>
                            <div class="f-visa">
                                <p>Booking Core</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade login" id="login" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content relative">
                    <div class="modal-header">
                        <h4 class="modal-title">Log In</h4>
                        <span class="c-pointer" data-dismiss="modal" aria-label="Close">
                            <i class="input-icon field-icon fa">
                                <img src="http://localhost:8001/images/ico_close.svg" alt="close">
                            </i>
                        </span>
                    </div>
                    <div class="modal-body relative">
                        <form class="bravo-form-login" method="POST" action="http://localhost:8001/login">
                            <input type="hidden" name="redirect" value="">
                            <input type="hidden" name="_token" value="vXshe4q7uxJCZyL1V8jPaNuOx2Cp89skdwSFD6BE">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" autocomplete="off"
                                    placeholder="Email address">
                                <i class="input-icon icofont-mail"></i>
                                <span class="invalid-feedback error error-email"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" autocomplete="off"
                                    placeholder="Password">
                                <i class="input-icon icofont-ui-password"></i>
                                <span class="invalid-feedback error error-password"></span>
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between">
                                    <label for="remember-me" class="mb0">
                                        <input type="checkbox" name="remember" id="remember-me" value="1">
                                        Remember me <span class="checkmark fcheckbox"></span>
                                    </label>
                                    <a href="http://localhost:8001/forgot-password">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="error message-error invalid-feedback"></div>
                            <div class="form-group">
                                <button class="btn btn-primary form-submit" type="submit">
                                    Login
                                    <span class="spinner-grow spinner-grow-sm icon-loading" role="status"
                                        aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="c-grey font-medium f14 text-center"> Do not have an account? <a
                                    href="" data-target="#register" data-toggle="modal">Sign Up</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade login" id="register" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content relative">
                    <div class="modal-header">
                        <h4 class="modal-title">Sign Up</h4>
                        <span class="c-pointer" data-dismiss="modal" aria-label="Close">
                            <i class="input-icon field-icon fa">
                                <img src="http://localhost:8001/images/ico_close.svg" alt="close">
                            </i>
                        </span>
                    </div>
                    <div class="modal-body">
                        <form class="form bravo-form-register" method="post"
                            action="http://localhost:8001/register">
                            <input type="hidden" name="_token" value="vXshe4q7uxJCZyL1V8jPaNuOx2Cp89skdwSFD6BE">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="first_name"
                                            autocomplete="off" placeholder="First Name">
                                        <i class="input-icon field-icon icofont-waiter-alt"></i>
                                        <span class="invalid-feedback error error-first_name"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="last_name"
                                            autocomplete="off" placeholder="Last Name">
                                        <i class="input-icon field-icon icofont-waiter-alt"></i>
                                        <span class="invalid-feedback error error-last_name"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" autocomplete="off"
                                    placeholder="Phone">
                                <i class="input-icon field-icon icofont-ui-touch-phone"></i>
                                <span class="invalid-feedback error error-phone"></span>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" autocomplete="off"
                                    placeholder="Email address">
                                <i class="input-icon field-icon icofont-mail"></i>
                                <span class="invalid-feedback error error-email"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" autocomplete="off"
                                    placeholder="Password">
                                <i class="input-icon field-icon icofont-ui-password"></i>
                                <span class="invalid-feedback error error-password"></span>
                            </div>
                            <div class="form-group">
                                <label for="term">
                                    <input id="term" type="checkbox" name="term" class="mr5">
                                    I have read and accept the <a href='' target='_blank'>Terms and Privacy
                                        Policy</a>
                                    <span class="checkmark fcheckbox"></span>
                                </label>
                                <div><span class="invalid-feedback error error-term"></span></div>
                            </div>
                            <div class="error message-error invalid-feedback"></div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-submit">
                                    Sign Up
                                    <span class="spinner-grow spinner-grow-sm icon-loading" role="status"
                                        aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="c-grey f14 text-center">
                                Already have an account?
                                <a href="#" data-target="#login" data-toggle="modal">Log In</a>
                            </div>
                        </form>
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
                                        <input type="text" placeholder="Search file name...."
                                            class="form-control" v-model="filter.s"
                                            @keyup.enter="filter.page = 1;reloadLists()">
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
                                        aria-current="page"><a @click.prevent="showFolder(item,index)"
                                            href="#">
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
                                    v-for="(folder,index) in folders" :index="index"
                                    :key="'folder-' + index" :folder="folder"></folder-item>
                                <file-item v-for="(file,index) in files" :key="index"
                                    :view-type="viewType" :selected="selected" :file="file"
                                    v-on:select-file="selectFile"></file-item>
                            </div>
                            <div class="files-wraps " v-if="viewType == 'grid'" :class="'view-' + viewType">
                                <folder-item @deleted="deletedFolder" @toggle-edit="toggleEditFolder"
                                    @dblclick="showFolder(folder)" @update="updateFolder"
                                    v-for="(folder,index) in folders" :index="index"
                                    :key="'folder-' + index" :folder="folder"></folder-item>
                                <file-item v-for="(file,index) in files" :key="index"
                                    :view-type="viewType" :selected="selected" :file="file"
                                    v-on:select-file="selectFile"></file-item>
                            </div>
                            <p class="no-files-text text-center" v-show="!total && apiFinished"
                                style="display: none">
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
                        <div class="browser-actions d-flex justify-content-between flex-shrink-0"
                            v-if="selected.length">
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



    <script type="text/javascript">
        var phpdebugbar = new PhpDebugBar.DebugBar();
        phpdebugbar.addIndicator("php_version", new PhpDebugBar.DebugBar.Indicator({
            "icon": "code",
            "tooltip": "PHP Version"
        }), "right");
        phpdebugbar.addTab("messages", new PhpDebugBar.DebugBar.Tab({
            "icon": "list-alt",
            "title": "Messages",
            "widget": new PhpDebugBar.Widgets.MessagesWidget()
        }));
        phpdebugbar.addIndicator("time", new PhpDebugBar.DebugBar.Indicator({
            "icon": "clock-o",
            "tooltip": "Request Duration"
        }), "right");
        phpdebugbar.addTab("timeline", new PhpDebugBar.DebugBar.Tab({
            "icon": "tasks",
            "title": "Timeline",
            "widget": new PhpDebugBar.Widgets.TimelineWidget()
        }));
        phpdebugbar.addIndicator("memory", new PhpDebugBar.DebugBar.Indicator({
            "icon": "cogs",
            "tooltip": "Memory Usage"
        }), "right");
        phpdebugbar.addTab("exceptions", new PhpDebugBar.DebugBar.Tab({
            "icon": "bug",
            "title": "Exceptions",
            "widget": new PhpDebugBar.Widgets.ExceptionsWidget()
        }));
        phpdebugbar.addTab("views", new PhpDebugBar.DebugBar.Tab({
            "icon": "leaf",
            "title": "Views",
            "widget": new PhpDebugBar.Widgets.TemplatesWidget()
        }));
        phpdebugbar.addTab("route", new PhpDebugBar.DebugBar.Tab({
            "icon": "share",
            "title": "Route",
            "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()
        }));
        phpdebugbar.addIndicator("currentroute", new PhpDebugBar.DebugBar.Indicator({
            "icon": "share",
            "tooltip": "Route"
        }), "right");
        phpdebugbar.addTab("queries", new PhpDebugBar.DebugBar.Tab({
            "icon": "database",
            "title": "Queries",
            "widget": new PhpDebugBar.Widgets.LaravelSQLQueriesWidget()
        }));
        phpdebugbar.addTab("models", new PhpDebugBar.DebugBar.Tab({
            "icon": "cubes",
            "title": "Models",
            "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()
        }));
        phpdebugbar.addTab("auth", new PhpDebugBar.DebugBar.Tab({
            "icon": "lock",
            "title": "Auth",
            "widget": new PhpDebugBar.Widgets.VariableListWidget()
        }));
        phpdebugbar.addIndicator("auth.name", new PhpDebugBar.DebugBar.Indicator({
            "icon": "user",
            "tooltip": "Auth status"
        }), "right");
        phpdebugbar.addTab("gate", new PhpDebugBar.DebugBar.Tab({
            "icon": "list-alt",
            "title": "Gate",
            "widget": new PhpDebugBar.Widgets.MessagesWidget()
        }));
        phpdebugbar.addTab("session", new PhpDebugBar.DebugBar.Tab({
            "icon": "archive",
            "title": "Session",
            "widget": new PhpDebugBar.Widgets.VariableListWidget()
        }));
        phpdebugbar.addTab("request", new PhpDebugBar.DebugBar.Tab({
            "icon": "tags",
            "title": "Request",
            "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()
        }));
        phpdebugbar.setDataMap({
            "php_version": ["php.version", ],
            "messages": ["messages.messages", []],
            "messages:badge": ["messages.count", null],
            "time": ["time.duration_str", '0ms'],
            "timeline": ["time", {}],
            "memory": ["memory.peak_usage_str", '0B'],
            "exceptions": ["exceptions.exceptions", []],
            "exceptions:badge": ["exceptions.count", null],
            "views": ["views", []],
            "views:badge": ["views.nb_templates", 0],
            "route": ["route", {}],
            "currentroute": ["route.uri", ],
            "queries": ["queries", []],
            "queries:badge": ["queries.nb_statements", 0],
            "models": ["models.data", {}],
            "models:badge": ["models.count", 0],
            "auth": ["auth.guards", {}],
            "auth.name": ["auth.names", ],
            "gate": ["gate.messages", []],
            "gate:badge": ["gate.count", null],
            "session": ["session", {}],
            "request": ["request", {}]
        });
        phpdebugbar.restoreState();
        phpdebugbar.ajaxHandler = new PhpDebugBar.AjaxHandler(phpdebugbar, undefined, true);
        phpdebugbar.ajaxHandler.bindToFetch();
        phpdebugbar.ajaxHandler.bindToXHR();
        phpdebugbar.setOpenHandler(new PhpDebugBar.OpenHandler({
            "url": "http:\/\/localhost:8001\/_debugbar\/open"
        }));
        phpdebugbar.addDataSet({
            "__meta": {
                "id": "Xa74dd5165f702b08ec8006c1a7fbf60f",
                "datetime": "2023-08-14 09:55:23",
                "utime": 1692006923.106759,
                "method": "GET",
                "uri": "\/hotel\/hotel-stanford",
                "ip": "127.0.0.1"
            },
            "php": {
                "version": "8.1.21",
                "interface": "cli-server"
            },
            "messages": {
                "count": 0,
                "messages": []
            },
            "time": {
                "start": 1692006922.813748,
                "end": 1692006923.106771,
                "duration": 0.29302310943603516,
                "duration_str": "293ms",
                "measures": [{
                    "label": "Booting",
                    "start": 1692006922.813748,
                    "relative_start": 0,
                    "end": 1692006922.94447,
                    "relative_end": 1692006922.94447,
                    "duration": 0.1307220458984375,
                    "duration_str": "131ms",
                    "params": [],
                    "collector": null
                }, {
                    "label": "Application",
                    "start": 1692006922.944544,
                    "relative_start": 0.13079619407653809,
                    "end": 1692006923.106773,
                    "relative_end": 1.9073486328125e-6,
                    "duration": 0.16222882270812988,
                    "duration_str": "162ms",
                    "params": [],
                    "collector": null
                }]
            },
            "memory": {
                "peak_usage": 5706160,
                "peak_usage_str": "5MB"
            },
            "exceptions": {
                "count": 0,
                "exceptions": []
            },
            "views": {
                "nb_templates": 35,
                "templates": [{
                    "name": "Hotel::frontend.detail (themes\/BC\/Hotel\/Views\/frontend\/detail.blade.php)",
                    "param_count": 9,
                    "params": ["row", "translation", "hotel_related", "location_category", "booking_data",
                        "review_list", "seo_meta", "body_class", "breadcrumbs"
                    ],
                    "type": "blade"
                }, {
                    "name": "Layout::parts.bc (modules\/Layout\/parts\/bc.blade.php)",
                    "param_count": 12,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs"
                    ],
                    "type": "blade"
                }, {
                    "name": "Hotel::frontend.layouts.details.hotel-banner (themes\/BC\/Hotel\/Views\/frontend\/layouts\/details\/hotel-banner.blade.php)",
                    "param_count": 12,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs"
                    ],
                    "type": "blade"
                }, {
                    "name": "Hotel::frontend.layouts.details.hotel-detail (themes\/BC\/Hotel\/Views\/frontend\/layouts\/details\/hotel-detail.blade.php)",
                    "param_count": 13,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score"
                    ],
                    "type": "blade"
                }, {
                    "name": "Hotel::frontend.layouts.details.hotel-rooms (themes\/BC\/Hotel\/Views\/frontend\/layouts\/details\/hotel-rooms.blade.php)",
                    "param_count": 18,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "star", "__currentLoopData", "item", "key",
                        "loop"
                    ],
                    "type": "blade"
                }, {
                    "name": "Booking::frontend.global.enquiry-form (themes\/BC\/Booking\/Views\/frontend\/global\/enquiry-form.blade.php)",
                    "param_count": 19,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "star", "__currentLoopData", "item", "key",
                        "loop", "service_type"
                    ],
                    "type": "blade"
                }, {
                    "name": "Hotel::frontend.layouts.details.hotel-attributes (themes\/BC\/Hotel\/Views\/frontend\/layouts\/details\/hotel-attributes.blade.php)",
                    "param_count": 18,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "star", "__currentLoopData", "item", "key",
                        "loop"
                    ],
                    "type": "blade"
                }, {
                    "name": "Hotel::frontend.layouts.details.hotel-surrounding (themes\/BC\/Hotel\/Views\/frontend\/layouts\/details\/hotel-surrounding.blade.php)",
                    "param_count": 18,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "star", "__currentLoopData", "item", "key",
                        "loop"
                    ],
                    "type": "blade"
                }, {
                    "name": "Hotel::frontend.layouts.details.hotel-review (themes\/BC\/Hotel\/Views\/frontend\/layouts\/details\/hotel-review.blade.php)",
                    "param_count": 13,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score"
                    ],
                    "type": "blade"
                }, {
                    "name": "Review::frontend.form (themes\/BC\/Review\/Views\/frontend\/form.blade.php)",
                    "param_count": 13,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score"
                    ],
                    "type": "blade"
                }, {
                    "name": "pagination::tailwind (resources\/views\/vendor\/pagination\/tailwind.blade.php)",
                    "param_count": 2,
                    "params": ["paginator", "elements"],
                    "type": "blade"
                }, {
                    "name": "vendor.pagination.default (resources\/views\/vendor\/pagination\/default.blade.php)",
                    "param_count": 5,
                    "params": ["__env", "app", "errors", "paginator", "elements"],
                    "type": "blade"
                }, {
                    "name": "admin.message (resources\/views\/admin\/message.blade.php)",
                    "param_count": 20,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "__currentLoopData", "item", "loop", "userInfo",
                        "picture", "avatar_url", "i"
                    ],
                    "type": "blade"
                }, {
                    "name": "Tour::frontend.layouts.details.vendor (themes\/BC\/Tour\/Views\/frontend\/layouts\/details\/vendor.blade.php)",
                    "param_count": 13,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score"
                    ],
                    "type": "blade"
                }, {
                    "name": "Hotel::frontend.layouts.details.hotel-form-enquiry (themes\/BC\/Hotel\/Views\/frontend\/layouts\/details\/hotel-form-enquiry.blade.php)",
                    "param_count": 13,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score"
                    ],
                    "type": "blade"
                }, {
                    "name": "Hotel::frontend.layouts.details.hotel-related-list (themes\/BC\/Hotel\/Views\/frontend\/layouts\/details\/hotel-related-list.blade.php)",
                    "param_count": 13,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score"
                    ],
                    "type": "blade"
                }, {
                    "name": "Hotel::frontend.layouts.details.hotel-attributes (themes\/BC\/Hotel\/Views\/frontend\/layouts\/details\/hotel-attributes.blade.php)",
                    "param_count": 13,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score"
                    ],
                    "type": "blade"
                }, {
                    "name": "Hotel::frontend.layouts.details.hotel-form-enquiry-mobile (themes\/BC\/Hotel\/Views\/frontend\/layouts\/details\/hotel-form-enquiry-mobile.blade.php)",
                    "param_count": 13,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score"
                    ],
                    "type": "blade"
                }, {
                    "name": "layouts.app (resources\/views\/layouts\/app.blade.php)",
                    "param_count": 13,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score"
                    ],
                    "type": "blade"
                }, {
                    "name": "Layout::app (modules\/Layout\/app.blade.php)",
                    "param_count": 13,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score"
                    ],
                    "type": "blade"
                }, {
                    "name": "Layout::parts.seo-meta (modules\/Layout\/parts\/seo-meta.blade.php)",
                    "param_count": 15,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "favicon", "file"
                    ],
                    "type": "blade"
                }, {
                    "name": "Layout::parts.global-script (modules\/Layout\/parts\/global-script.blade.php)",
                    "param_count": 15,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "favicon", "file"
                    ],
                    "type": "blade"
                }, {
                    "name": "Layout::parts.topbar (modules\/Layout\/parts\/topbar.blade.php)",
                    "param_count": 15,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "favicon", "file"
                    ],
                    "type": "blade"
                }, {
                    "name": "Core::frontend.currency-switcher (themes\/BC\/Core\/Views\/frontend\/currency-switcher.blade.php)",
                    "param_count": 15,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "favicon", "file"
                    ],
                    "type": "blade"
                }, {
                    "name": "Language::frontend.switcher (themes\/BC\/Language\/Views\/frontend\/switcher.blade.php)",
                    "param_count": 15,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "favicon", "file"
                    ],
                    "type": "blade"
                }, {
                    "name": "Layout::parts.notification (modules\/Layout\/parts\/notification.blade.php)",
                    "param_count": 15,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "favicon", "file"
                    ],
                    "type": "blade"
                }, {
                    "name": "Layout::parts.header (modules\/Layout\/parts\/header.blade.php)",
                    "param_count": 15,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "favicon", "file"
                    ],
                    "type": "blade"
                }, {
                    "name": "Core::frontend.currency-switcher (themes\/BC\/Core\/Views\/frontend\/currency-switcher.blade.php)",
                    "param_count": 17,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "favicon", "file", "logo_id", "logo"
                    ],
                    "type": "blade"
                }, {
                    "name": "Language::frontend.switcher (themes\/BC\/Language\/Views\/frontend\/switcher.blade.php)",
                    "param_count": 17,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "favicon", "file", "logo_id", "logo"
                    ],
                    "type": "blade"
                }, {
                    "name": "Layout::parts.footer (modules\/Layout\/parts\/footer.blade.php)",
                    "param_count": 15,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "favicon", "file"
                    ],
                    "type": "blade"
                }, {
                    "name": "Layout::parts.login-register-modal (modules\/Layout\/parts\/login-register-modal.blade.php)",
                    "param_count": 20,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "favicon", "file", "list_widget_footers",
                        "__currentLoopData", "item", "key", "loop"
                    ],
                    "type": "blade"
                }, {
                    "name": "Layout::auth.login-form (modules\/Layout\/auth\/login-form.blade.php)",
                    "param_count": 20,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "favicon", "file", "list_widget_footers",
                        "__currentLoopData", "item", "key", "loop"
                    ],
                    "type": "blade"
                }, {
                    "name": "Layout::auth.register-form (modules\/Layout\/auth\/register-form.blade.php)",
                    "param_count": 20,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "favicon", "file", "list_widget_footers",
                        "__currentLoopData", "item", "key", "loop"
                    ],
                    "type": "blade"
                }, {
                    "name": "Popup::frontend.popup (themes\/Base\/Popup\/Views\/frontend\/popup.blade.php)",
                    "param_count": 20,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "favicon", "file", "list_widget_footers",
                        "__currentLoopData", "item", "key", "loop"
                    ],
                    "type": "blade"
                }, {
                    "name": "Media::browser (modules\/Media\/Views\/browser.blade.php)",
                    "param_count": 20,
                    "params": ["__env", "app", "errors", "row", "translation", "hotel_related",
                        "location_category", "booking_data", "review_list", "seo_meta", "body_class",
                        "breadcrumbs", "review_score", "favicon", "file", "list_widget_footers",
                        "__currentLoopData", "item", "key", "loop"
                    ],
                    "type": "blade"
                }]
            },
            "route": {
                "uri": "GET hotel\/{slug}",
                "middleware": "web",
                "controller": "Modules\\Hotel\\Controllers\\HotelController@detail",
                "namespace": "Modules\\Hotel\\Controllers",
                "prefix": "\/hotel",
                "where": [],
                "as": "hotel.detail",
                "file": "<a href=\"phpstorm:\/\/open?file=\/home\/montaser\/Desktop\/projects\/tawreed-booking\/booking\/modules\/Hotel\/Controllers\/HotelController.php&line=97\">modules\/Hotel\/Controllers\/HotelController.php:97-134<\/a>"
            },
            "queries": {
                "nb_statements": 47,
                "nb_failed_statements": 0,
                "accumulated_duration": 0.035219999999999994,
                "accumulated_duration_str": "35.22ms",
                "statements": [{
                    "sql": "select * from `users` where `id` = 1 and `users`.`deleted_at` is null limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["1"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 15,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Auth\/EloquentUserProvider.php",
                        "line": 59
                    }, {
                        "index": 16,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Auth\/SessionGuard.php",
                        "line": 159
                    }, {
                        "index": 17,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Auth\/AuthManager.php",
                        "line": 340
                    }, {
                        "index": 19,
                        "namespace": null,
                        "name": "\/app\/Http\/Middleware\/HideDebugbar.php",
                        "line": 25
                    }, {
                        "index": 20,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
                        "line": 180
                    }],
                    "duration": 0.00227,
                    "duration_str": "2.27ms",
                    "stmt_id": "\/vendor\/laravel\/framework\/src\/Illuminate\/Auth\/EloquentUserProvider.php:59",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `core_roles` where `core_roles`.`id` = 1 limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["1"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 20,
                        "namespace": null,
                        "name": "\/modules\/User\/Traits\/HasRoles.php",
                        "line": 23
                    }, {
                        "index": 21,
                        "namespace": null,
                        "name": "\/app\/Http\/Middleware\/HideDebugbar.php",
                        "line": 25
                    }, {
                        "index": 22,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
                        "line": 180
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/app\/Http\/Middleware\/RedirectForMultiLanguage.php",
                        "line": 58
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
                        "line": 180
                    }],
                    "duration": 0.00065,
                    "duration_str": "650\u03bcs",
                    "stmt_id": "\/modules\/User\/Traits\/HasRoles.php:23",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_hotels` where `slug` = 'hotel-stanford' and `bravo_hotels`.`deleted_at` is null limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["hotel-stanford"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 15,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 99
                    }, {
                        "index": 16,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
                        "line": 54
                    }, {
                        "index": 17,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 34
                    }, {
                        "index": 18,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
                        "line": 43
                    }, {
                        "index": 19,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
                        "line": 260
                    }],
                    "duration": 0.00069,
                    "duration_str": "690\u03bcs",
                    "stmt_id": "\/modules\/Hotel\/Controllers\/HotelController.php:99",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_locations` where `bravo_locations`.`id` in (1) and `bravo_locations`.`deleted_at` is null",
                    "type": "query",
                    "params": [],
                    "bindings": [],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table"],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 20,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 99
                    }, {
                        "index": 21,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
                        "line": 54
                    }, {
                        "index": 22,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 34
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
                        "line": 43
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
                        "line": 260
                    }],
                    "duration": 0.00068,
                    "duration_str": "680\u03bcs",
                    "stmt_id": "\/modules\/Hotel\/Controllers\/HotelController.php:99",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_location_translations` where `locale` = 'en' and `bravo_location_translations`.`origin_id` in (1)",
                    "type": "query",
                    "params": [],
                    "bindings": ["en"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table"],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 25,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 99
                    }, {
                        "index": 26,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
                        "line": 54
                    }, {
                        "index": 27,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 34
                    }, {
                        "index": 28,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
                        "line": 43
                    }, {
                        "index": 29,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
                        "line": 260
                    }],
                    "duration": 0.00055,
                    "duration_str": "550\u03bcs",
                    "stmt_id": "\/modules\/Hotel\/Controllers\/HotelController.php:99",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_hotel_translations` where `locale` = 'en' and `bravo_hotel_translations`.`origin_id` in (1) and `bravo_hotel_translations`.`deleted_at` is null",
                    "type": "query",
                    "params": [],
                    "bindings": ["en"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table"],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 20,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 99
                    }, {
                        "index": 21,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
                        "line": 54
                    }, {
                        "index": 22,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 34
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
                        "line": 43
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
                        "line": 260
                    }],
                    "duration": 0.00064,
                    "duration_str": "640\u03bcs",
                    "stmt_id": "\/modules\/Hotel\/Controllers\/HotelController.php:99",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `user_wishlist` where `object_model` = 'hotel' and `user_id` = 1 and `user_wishlist`.`object_id` in (1)",
                    "type": "query",
                    "params": [],
                    "bindings": ["hotel", "1"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table"],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 20,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 99
                    }, {
                        "index": 21,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
                        "line": 54
                    }, {
                        "index": 22,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 34
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
                        "line": 43
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
                        "line": 260
                    }],
                    "duration": 0.00068,
                    "duration_str": "680\u03bcs",
                    "stmt_id": "\/modules\/Hotel\/Controllers\/HotelController.php:99",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_hotels` where `location_id` = 1 and `status` = 'publish' and `id` not in (1) and `bravo_hotels`.`deleted_at` is null limit 4",
                    "type": "query",
                    "params": [],
                    "bindings": ["1", "publish", "1"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 14,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 107
                    }, {
                        "index": 15,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
                        "line": 54
                    }, {
                        "index": 16,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 34
                    }, {
                        "index": 17,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
                        "line": 43
                    }, {
                        "index": 18,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
                        "line": 260
                    }],
                    "duration": 0.00085,
                    "duration_str": "850\u03bcs",
                    "stmt_id": "\/modules\/Hotel\/Controllers\/HotelController.php:107",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_locations` where `bravo_locations`.`id` in (1) and `bravo_locations`.`deleted_at` is null",
                    "type": "query",
                    "params": [],
                    "bindings": [],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table"],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 19,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 107
                    }, {
                        "index": 20,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
                        "line": 54
                    }, {
                        "index": 21,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 34
                    }, {
                        "index": 22,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
                        "line": 43
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
                        "line": 260
                    }],
                    "duration": 0.0006,
                    "duration_str": "600\u03bcs",
                    "stmt_id": "\/modules\/Hotel\/Controllers\/HotelController.php:107",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_location_translations` where `locale` = 'en' and `bravo_location_translations`.`origin_id` in (1)",
                    "type": "query",
                    "params": [],
                    "bindings": ["en"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table"],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 24,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 107
                    }, {
                        "index": 25,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
                        "line": 54
                    }, {
                        "index": 26,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 34
                    }, {
                        "index": 27,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
                        "line": 43
                    }, {
                        "index": 28,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
                        "line": 260
                    }],
                    "duration": 0.0005200000000000001,
                    "duration_str": "520\u03bcs",
                    "stmt_id": "\/modules\/Hotel\/Controllers\/HotelController.php:107",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_hotel_translations` where `locale` = 'en' and `bravo_hotel_translations`.`origin_id` in (2, 3, 4, 9) and `bravo_hotel_translations`.`deleted_at` is null",
                    "type": "query",
                    "params": [],
                    "bindings": ["en"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table"],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 19,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 107
                    }, {
                        "index": 20,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
                        "line": 54
                    }, {
                        "index": 21,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 34
                    }, {
                        "index": 22,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
                        "line": 43
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
                        "line": 260
                    }],
                    "duration": 0.00051,
                    "duration_str": "510\u03bcs",
                    "stmt_id": "\/modules\/Hotel\/Controllers\/HotelController.php:107",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `user_wishlist` where `object_model` = 'hotel' and `user_id` = 1 and `user_wishlist`.`object_id` in (2, 3, 4, 9)",
                    "type": "query",
                    "params": [],
                    "bindings": ["hotel", "1"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table"],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 19,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 107
                    }, {
                        "index": 20,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
                        "line": 54
                    }, {
                        "index": 21,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 34
                    }, {
                        "index": 22,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
                        "line": 43
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
                        "line": 260
                    }],
                    "duration": 0.0005,
                    "duration_str": "500\u03bcs",
                    "stmt_id": "\/modules\/Hotel\/Controllers\/HotelController.php:107",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select count(*) as aggregate from `bravo_review` where `object_id` = 1 and `object_model` = 'hotel' and `status` = 'approved' and `bravo_review`.`deleted_at` is null",
                    "type": "query",
                    "params": [],
                    "bindings": ["1", "hotel", "approved"],
                    "hints": [],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 15,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Models\/Hotel.php",
                        "line": 721
                    }, {
                        "index": 16,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 109
                    }, {
                        "index": 17,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
                        "line": 54
                    }, {
                        "index": 18,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 34
                    }, {
                        "index": 19,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
                        "line": 43
                    }],
                    "duration": 0.00082,
                    "duration_str": "820\u03bcs",
                    "stmt_id": "\/modules\/Hotel\/Models\/Hotel.php:721",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select `id`, `title`, `content`, `rate_number`, `author_ip`, `status`, `created_at`, `vendor_id`, `author_id` from `bravo_review` where `object_id` = 1 and `object_model` = 'hotel' and `status` = 'approved' and `bravo_review`.`deleted_at` is null order by `id` desc limit 5 offset 0",
                    "type": "query",
                    "params": [],
                    "bindings": ["1", "hotel", "approved"],
                    "hints": [],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 15,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Models\/Hotel.php",
                        "line": 721
                    }, {
                        "index": 16,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 109
                    }, {
                        "index": 17,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
                        "line": 54
                    }, {
                        "index": 18,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 34
                    }, {
                        "index": 19,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
                        "line": 43
                    }],
                    "duration": 0.00061,
                    "duration_str": "610\u03bcs",
                    "stmt_id": "\/modules\/Hotel\/Models\/Hotel.php:721",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select `id`, `name`, `first_name`, `last_name`, `avatar_id` from `users` where `users`.`id` in (7, 13, 16) and `users`.`deleted_at` is null",
                    "type": "query",
                    "params": [],
                    "bindings": [],
                    "hints": [],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 20,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Models\/Hotel.php",
                        "line": 721
                    }, {
                        "index": 21,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 109
                    }, {
                        "index": 22,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
                        "line": 54
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 34
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
                        "line": 43
                    }],
                    "duration": 0.00049,
                    "duration_str": "490\u03bcs",
                    "stmt_id": "\/modules\/Hotel\/Models\/Hotel.php:721",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `location_category` where `status` = 'publish' and `location_category`.`deleted_at` is null",
                    "type": "query",
                    "params": [],
                    "bindings": ["publish"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table"],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 14,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 114
                    }, {
                        "index": 15,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
                        "line": 54
                    }, {
                        "index": 16,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 34
                    }, {
                        "index": 17,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
                        "line": 43
                    }, {
                        "index": 18,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
                        "line": 260
                    }],
                    "duration": 0.00127,
                    "duration_str": "1.27ms",
                    "stmt_id": "\/modules\/Hotel\/Controllers\/HotelController.php:114",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `location_category_translations` where `locale` = 'en' and `location_category_translations`.`origin_id` in (1, 2, 3)",
                    "type": "query",
                    "params": [],
                    "bindings": ["en"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table"],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 19,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 114
                    }, {
                        "index": 20,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
                        "line": 54
                    }, {
                        "index": 21,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 34
                    }, {
                        "index": 22,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
                        "line": 43
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
                        "line": 260
                    }],
                    "duration": 0.00049,
                    "duration_str": "490\u03bcs",
                    "stmt_id": "\/modules\/Hotel\/Controllers\/HotelController.php:114",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_seo` where `object_id` = 1 and `object_model` = 'hotel' limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["1", "hotel"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 15,
                        "namespace": null,
                        "name": "\/app\/BaseModel.php",
                        "line": 199
                    }, {
                        "index": 16,
                        "namespace": null,
                        "name": "\/app\/BaseModel.php",
                        "line": 212
                    }, {
                        "index": 17,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 117
                    }, {
                        "index": 18,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
                        "line": 54
                    }, {
                        "index": 19,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 34
                    }],
                    "duration": 0.00047999999999999996,
                    "duration_str": "480\u03bcs",
                    "stmt_id": "\/app\/BaseModel.php:199",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_locations` where (2 between `bravo_locations`.`_lft` and `bravo_locations`.`_rgt` and `bravo_locations`.`id` <> 1) and `bravo_locations`.`deleted_at` is null",
                    "type": "query",
                    "params": [],
                    "bindings": ["2", "1"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table"],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 14,
                        "namespace": null,
                        "name": "\/vendor\/kalnoy\/nestedset\/src\/QueryBuilder.php",
                        "line": 159
                    }, {
                        "index": 17,
                        "namespace": null,
                        "name": "\/modules\/Location\/Traits\/HasLocation.php",
                        "line": 21
                    }, {
                        "index": 18,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 126
                    }, {
                        "index": 19,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
                        "line": 54
                    }, {
                        "index": 20,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Controllers\/HotelController.php",
                        "line": 34
                    }],
                    "duration": 0.00045,
                    "duration_str": "450\u03bcs",
                    "stmt_id": "\/vendor\/kalnoy\/nestedset\/src\/QueryBuilder.php:159",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select  AVG(rate_number) as score_total , COUNT(id) as total_review  from `bravo_review` where `object_id` = 1 and `object_model` = 'hotel' and `status` = 'approved' and `bravo_review`.`deleted_at` is null limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["1", "hotel", "approved"],
                    "hints": [
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 15,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Models\/Hotel.php",
                        "line": 667
                    }, {
                        "index": 21,
                        "namespace": "view",
                        "name": "7d4b95bc016acf7eb53f6af727f07016823c9992",
                        "line": 15
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 25,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.00074,
                    "duration_str": "740\u03bcs",
                    "stmt_id": "\/modules\/Hotel\/Models\/Hotel.php:667",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select COUNT( CASE WHEN rate_number = 5 THEN rate_number ELSE NULL END ) AS rate_5,\nCOUNT( CASE WHEN rate_number = 4 THEN rate_number ELSE NULL END ) AS rate_4,\nCOUNT( CASE WHEN rate_number = 3 THEN rate_number ELSE NULL END ) AS rate_3,\nCOUNT( CASE WHEN rate_number = 2 THEN rate_number ELSE NULL END ) AS rate_2,\nCOUNT( CASE WHEN rate_number = 1 THEN rate_number ELSE NULL END ) AS rate_1  from `bravo_review` where `object_id` = 1 and `object_model` = 'hotel' and `status` = 'approved' and `bravo_review`.`deleted_at` is null limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["1", "hotel", "approved"],
                    "hints": [
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 15,
                        "namespace": null,
                        "name": "\/modules\/Hotel\/Models\/Hotel.php",
                        "line": 679
                    }, {
                        "index": 21,
                        "namespace": "view",
                        "name": "7d4b95bc016acf7eb53f6af727f07016823c9992",
                        "line": 15
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 25,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.00083,
                    "duration_str": "830\u03bcs",
                    "stmt_id": "\/modules\/Hotel\/Models\/Hotel.php:679",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select  \tCOUNT( id ) AS total_review, COUNT( CASE WHEN rate_number >= 4 THEN 1 ELSE null END )  as total_review_recommend  from `bravo_review` where `object_id` = 1 and `object_model` = 'hotel' and `status` = 'approved' and `bravo_review`.`deleted_at` is null limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["1", "hotel", "approved"],
                    "hints": [
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 15,
                        "namespace": null,
                        "name": "\/modules\/Booking\/Models\/Bookable.php",
                        "line": 357
                    }, {
                        "index": 21,
                        "namespace": "view",
                        "name": "f61fee19c75d45a789ea86e2e223353b4b410988",
                        "line": 32
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 25,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.00074,
                    "duration_str": "740\u03bcs",
                    "stmt_id": "\/modules\/Booking\/Models\/Bookable.php:357",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_hotel_term` where `bravo_hotel_term`.`target_id` = 1 and `bravo_hotel_term`.`target_id` is not null",
                    "type": "query",
                    "params": [],
                    "bindings": ["1"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table"],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 19,
                        "namespace": "view",
                        "name": "3e561b3167ea1afe433616a727bce6d565f0275f",
                        "line": 2
                    }, {
                        "index": 21,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 22,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
                        "line": 152
                    }],
                    "duration": 0.0008,
                    "duration_str": "800\u03bcs",
                    "stmt_id": "view::3e561b3167ea1afe433616a727bce6d565f0275f:2",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_terms` where `bravo_terms`.`id` in (32, 33, 34, 35, 36, 37, 38, 39, 40, 42, 43, 44, 45, 47, 48, 50, 51, 52, 53, 54, 55) and `bravo_terms`.`deleted_at` is null",
                    "type": "query",
                    "params": [],
                    "bindings": ["32", "33", "34", "35", "36", "37", "38", "39", "40", "42", "43", "44",
                        "45", "47", "48", "50", "51", "52", "53", "54", "55"
                    ],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table"],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 16,
                        "namespace": null,
                        "name": "\/modules\/Core\/Models\/Terms.php",
                        "line": 40
                    }, {
                        "index": 17,
                        "namespace": "view",
                        "name": "3e561b3167ea1afe433616a727bce6d565f0275f",
                        "line": 3
                    }, {
                        "index": 19,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 20,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 21,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.0007700000000000001,
                    "duration_str": "770\u03bcs",
                    "stmt_id": "\/modules\/Core\/Models\/Terms.php:40",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_terms_translations` where `locale` = 'en' and `bravo_terms_translations`.`origin_id` in (32, 33, 34, 35, 36, 37, 38, 39, 40, 42, 43, 44, 45, 47, 48, 50, 51, 52, 53, 54, 55)",
                    "type": "query",
                    "params": [],
                    "bindings": ["en"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table"],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 21,
                        "namespace": null,
                        "name": "\/modules\/Core\/Models\/Terms.php",
                        "line": 40
                    }, {
                        "index": 22,
                        "namespace": "view",
                        "name": "3e561b3167ea1afe433616a727bce6d565f0275f",
                        "line": 3
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 25,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 26,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.00062,
                    "duration_str": "620\u03bcs",
                    "stmt_id": "\/modules\/Core\/Models\/Terms.php:40",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_attrs` where `bravo_attrs`.`id` in (5, 6, 7) and `bravo_attrs`.`deleted_at` is null",
                    "type": "query",
                    "params": [],
                    "bindings": ["5", "6", "7"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table"],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 21,
                        "namespace": null,
                        "name": "\/modules\/Core\/Models\/Terms.php",
                        "line": 40
                    }, {
                        "index": 22,
                        "namespace": "view",
                        "name": "3e561b3167ea1afe433616a727bce6d565f0275f",
                        "line": 3
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 25,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 26,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.00057,
                    "duration_str": "570\u03bcs",
                    "stmt_id": "\/modules\/Core\/Models\/Terms.php:40",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_attrs_translations` where `bravo_attrs_translations`.`origin_id` = 5 and `bravo_attrs_translations`.`origin_id` is not null and `locale` = 'en' limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["5", "en"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 20,
                        "namespace": null,
                        "name": "\/app\/Traits\/HasTranslations.php",
                        "line": 51
                    }, {
                        "index": 21,
                        "namespace": "view",
                        "name": "3e561b3167ea1afe433616a727bce6d565f0275f",
                        "line": 7
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 25,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.0005899999999999999,
                    "duration_str": "590\u03bcs",
                    "stmt_id": "\/app\/Traits\/HasTranslations.php:51",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_attrs_translations` where `bravo_attrs_translations`.`origin_id` = 6 and `bravo_attrs_translations`.`origin_id` is not null and `locale` = 'en' limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["6", "en"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 20,
                        "namespace": null,
                        "name": "\/app\/Traits\/HasTranslations.php",
                        "line": 51
                    }, {
                        "index": 21,
                        "namespace": "view",
                        "name": "3e561b3167ea1afe433616a727bce6d565f0275f",
                        "line": 7
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 25,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.0005600000000000001,
                    "duration_str": "560\u03bcs",
                    "stmt_id": "\/app\/Traits\/HasTranslations.php:51",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_attrs_translations` where `bravo_attrs_translations`.`origin_id` = 7 and `bravo_attrs_translations`.`origin_id` is not null and `locale` = 'en' limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["7", "en"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 20,
                        "namespace": null,
                        "name": "\/app\/Traits\/HasTranslations.php",
                        "line": 51
                    }, {
                        "index": 21,
                        "namespace": "view",
                        "name": "3e561b3167ea1afe433616a727bce6d565f0275f",
                        "line": 7
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 25,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.00063,
                    "duration_str": "630\u03bcs",
                    "stmt_id": "\/app\/Traits\/HasTranslations.php:51",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_review_meta` where `review_id` = 90 and `name` = 'upload_picture' limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["90", "upload_picture"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 15,
                        "namespace": null,
                        "name": "\/modules\/Review\/Models\/Review.php",
                        "line": 75
                    }, {
                        "index": 16,
                        "namespace": "view",
                        "name": "bf61b191f52e0e602ba0b63f8ded96b84bb70b91",
                        "line": 55
                    }, {
                        "index": 18,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 19,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 20,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.00161,
                    "duration_str": "1.61ms",
                    "stmt_id": "\/modules\/Review\/Models\/Review.php:75",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `user_meta` where (`user_id` is null and `name` = 'social_meta_avatar') limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["social_meta_avatar"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 13,
                        "namespace": null,
                        "name": "\/app\/User.php",
                        "line": 97
                    }, {
                        "index": 14,
                        "namespace": null,
                        "name": "\/app\/User.php",
                        "line": 195
                    }, {
                        "index": 15,
                        "namespace": "view",
                        "name": "bf61b191f52e0e602ba0b63f8ded96b84bb70b91",
                        "line": 60
                    }, {
                        "index": 17,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 18,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }],
                    "duration": 0.00055,
                    "duration_str": "550\u03bcs",
                    "stmt_id": "\/app\/User.php:97",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_review_meta` where `review_id` = 89 and `name` = 'upload_picture' limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["89", "upload_picture"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 15,
                        "namespace": null,
                        "name": "\/modules\/Review\/Models\/Review.php",
                        "line": 75
                    }, {
                        "index": 16,
                        "namespace": "view",
                        "name": "bf61b191f52e0e602ba0b63f8ded96b84bb70b91",
                        "line": 55
                    }, {
                        "index": 18,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 19,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 20,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.00158,
                    "duration_str": "1.58ms",
                    "stmt_id": "\/modules\/Review\/Models\/Review.php:75",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `user_meta` where (`user_id` = 7 and `name` = 'social_meta_avatar') limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["7", "social_meta_avatar"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 13,
                        "namespace": null,
                        "name": "\/app\/User.php",
                        "line": 97
                    }, {
                        "index": 14,
                        "namespace": null,
                        "name": "\/app\/User.php",
                        "line": 195
                    }, {
                        "index": 15,
                        "namespace": "view",
                        "name": "bf61b191f52e0e602ba0b63f8ded96b84bb70b91",
                        "line": 60
                    }, {
                        "index": 17,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 18,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }],
                    "duration": 0.00058,
                    "duration_str": "580\u03bcs",
                    "stmt_id": "\/app\/User.php:97",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_review_meta` where `review_id` = 88 and `name` = 'upload_picture' limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["88", "upload_picture"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 15,
                        "namespace": null,
                        "name": "\/modules\/Review\/Models\/Review.php",
                        "line": 75
                    }, {
                        "index": 16,
                        "namespace": "view",
                        "name": "bf61b191f52e0e602ba0b63f8ded96b84bb70b91",
                        "line": 55
                    }, {
                        "index": 18,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 19,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 20,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.00249,
                    "duration_str": "2.49ms",
                    "stmt_id": "\/modules\/Review\/Models\/Review.php:75",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `user_meta` where (`user_id` is null and `name` = 'social_meta_avatar') limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["social_meta_avatar"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 13,
                        "namespace": null,
                        "name": "\/app\/User.php",
                        "line": 97
                    }, {
                        "index": 14,
                        "namespace": null,
                        "name": "\/app\/User.php",
                        "line": 195
                    }, {
                        "index": 15,
                        "namespace": "view",
                        "name": "bf61b191f52e0e602ba0b63f8ded96b84bb70b91",
                        "line": 60
                    }, {
                        "index": 17,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 18,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }],
                    "duration": 0.0004,
                    "duration_str": "400\u03bcs",
                    "stmt_id": "\/app\/User.php:97",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `users` where `users`.`id` = 1 and `users`.`deleted_at` is null limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["1"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 20,
                        "namespace": "view",
                        "name": "7032a03af0b21983a822be07b79b38d96e233ff3",
                        "line": 3
                    }, {
                        "index": 22,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }, {
                        "index": 25,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
                        "line": 152
                    }],
                    "duration": 0.0007099999999999999,
                    "duration_str": "710\u03bcs",
                    "stmt_id": "view::7032a03af0b21983a822be07b79b38d96e233ff3:3",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_terms` where `bravo_terms`.`id` in (32, 33, 34, 35, 36, 37, 38, 39, 40, 42, 43, 44, 45, 47, 48, 50, 51, 52, 53, 54, 55) and `bravo_terms`.`deleted_at` is null",
                    "type": "query",
                    "params": [],
                    "bindings": ["32", "33", "34", "35", "36", "37", "38", "39", "40", "42", "43", "44",
                        "45", "47", "48", "50", "51", "52", "53", "54", "55"
                    ],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table"],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 16,
                        "namespace": null,
                        "name": "\/modules\/Core\/Models\/Terms.php",
                        "line": 40
                    }, {
                        "index": 17,
                        "namespace": "view",
                        "name": "3e561b3167ea1afe433616a727bce6d565f0275f",
                        "line": 3
                    }, {
                        "index": 19,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 20,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 21,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.00085,
                    "duration_str": "850\u03bcs",
                    "stmt_id": "\/modules\/Core\/Models\/Terms.php:40",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_terms_translations` where `locale` = 'en' and `bravo_terms_translations`.`origin_id` in (32, 33, 34, 35, 36, 37, 38, 39, 40, 42, 43, 44, 45, 47, 48, 50, 51, 52, 53, 54, 55)",
                    "type": "query",
                    "params": [],
                    "bindings": ["en"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table"],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 21,
                        "namespace": null,
                        "name": "\/modules\/Core\/Models\/Terms.php",
                        "line": 40
                    }, {
                        "index": 22,
                        "namespace": "view",
                        "name": "3e561b3167ea1afe433616a727bce6d565f0275f",
                        "line": 3
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 25,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 26,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.00061,
                    "duration_str": "610\u03bcs",
                    "stmt_id": "\/modules\/Core\/Models\/Terms.php:40",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_attrs` where `bravo_attrs`.`id` in (5, 6, 7) and `bravo_attrs`.`deleted_at` is null",
                    "type": "query",
                    "params": [],
                    "bindings": ["5", "6", "7"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table"],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 21,
                        "namespace": null,
                        "name": "\/modules\/Core\/Models\/Terms.php",
                        "line": 40
                    }, {
                        "index": 22,
                        "namespace": "view",
                        "name": "3e561b3167ea1afe433616a727bce6d565f0275f",
                        "line": 3
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 25,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 26,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.00046,
                    "duration_str": "460\u03bcs",
                    "stmt_id": "\/modules\/Core\/Models\/Terms.php:40",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_attrs_translations` where `bravo_attrs_translations`.`origin_id` = 5 and `bravo_attrs_translations`.`origin_id` is not null and `locale` = 'en' limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["5", "en"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 20,
                        "namespace": null,
                        "name": "\/app\/Traits\/HasTranslations.php",
                        "line": 51
                    }, {
                        "index": 21,
                        "namespace": "view",
                        "name": "3e561b3167ea1afe433616a727bce6d565f0275f",
                        "line": 7
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 25,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.00063,
                    "duration_str": "630\u03bcs",
                    "stmt_id": "\/app\/Traits\/HasTranslations.php:51",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_attrs_translations` where `bravo_attrs_translations`.`origin_id` = 6 and `bravo_attrs_translations`.`origin_id` is not null and `locale` = 'en' limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["6", "en"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 20,
                        "namespace": null,
                        "name": "\/app\/Traits\/HasTranslations.php",
                        "line": 51
                    }, {
                        "index": 21,
                        "namespace": "view",
                        "name": "3e561b3167ea1afe433616a727bce6d565f0275f",
                        "line": 7
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 25,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.00047,
                    "duration_str": "470\u03bcs",
                    "stmt_id": "\/app\/Traits\/HasTranslations.php:51",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `bravo_attrs_translations` where `bravo_attrs_translations`.`origin_id` = 7 and `bravo_attrs_translations`.`origin_id` is not null and `locale` = 'en' limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["7", "en"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 20,
                        "namespace": null,
                        "name": "\/app\/Traits\/HasTranslations.php",
                        "line": 51
                    }, {
                        "index": 21,
                        "namespace": "view",
                        "name": "3e561b3167ea1afe433616a727bce6d565f0275f",
                        "line": 7
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 25,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.0004,
                    "duration_str": "400\u03bcs",
                    "stmt_id": "\/app\/Traits\/HasTranslations.php:51",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `notifications` where (`for_admin` = 1 or `notifiable_id` = 1) order by `created_at` desc limit 5",
                    "type": "query",
                    "params": [],
                    "bindings": ["1", "1"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table"],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 14,
                        "namespace": null,
                        "name": "\/app\/Helpers\/AppHelper.php",
                        "line": 1199
                    }, {
                        "index": 17,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 18,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 19,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }, {
                        "index": 20,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
                        "line": 152
                    }],
                    "duration": 0.0005600000000000001,
                    "duration_str": "560\u03bcs",
                    "stmt_id": "\/app\/Helpers\/AppHelper.php:1199",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select count(*) as aggregate from `notifications` where (`for_admin` = 1 or `notifiable_id` = 1) and `read_at` is null limit 5",
                    "type": "query",
                    "params": [],
                    "bindings": ["1", "1"],
                    "hints": [
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 15,
                        "namespace": null,
                        "name": "\/app\/Helpers\/AppHelper.php",
                        "line": 1200
                    }, {
                        "index": 18,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 19,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 20,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }, {
                        "index": 21,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
                        "line": 152
                    }],
                    "duration": 0.00061,
                    "duration_str": "610\u03bcs",
                    "stmt_id": "\/app\/Helpers\/AppHelper.php:1200",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `core_menu_translations` where `core_menu_translations`.`origin_id` = 1 and `core_menu_translations`.`origin_id` is not null and `locale` = 'en' limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["1", "en"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 20,
                        "namespace": null,
                        "name": "\/app\/Traits\/HasTranslations.php",
                        "line": 51
                    }, {
                        "index": 21,
                        "namespace": null,
                        "name": "\/app\/Helpers\/AppHelper.php",
                        "line": 111
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 25,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 26,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.00074,
                    "duration_str": "740\u03bcs",
                    "stmt_id": "\/app\/Traits\/HasTranslations.php:51",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `core_menu_translations` where `core_menu_translations`.`origin_id` = 1 and `core_menu_translations`.`origin_id` is not null and `locale` = 'en' limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": ["1", "en"],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 20,
                        "namespace": null,
                        "name": "\/app\/Traits\/HasTranslations.php",
                        "line": 51
                    }, {
                        "index": 21,
                        "namespace": null,
                        "name": "\/app\/Helpers\/AppHelper.php",
                        "line": 111
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 25,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 26,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }],
                    "duration": 0.00069,
                    "duration_str": "690\u03bcs",
                    "stmt_id": "\/app\/Traits\/HasTranslations.php:51",
                    "connection": "tawreedtech_booking"
                }, {
                    "sql": "select * from `core_pages` where `core_pages`.`id` = '' and `core_pages`.`deleted_at` is null limit 1",
                    "type": "query",
                    "params": [],
                    "bindings": [""],
                    "hints": ["Use <code>SELECT *<\/code> only if you need all columns from table",
                        "<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"
                    ],
                    "show_copy": false,
                    "backtrace": [{
                        "index": 19,
                        "namespace": null,
                        "name": "\/app\/Helpers\/AppHelper.php",
                        "line": 627
                    }, {
                        "index": 22,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
                        "line": 110
                    }, {
                        "index": 23,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
                        "line": 58
                    }, {
                        "index": 24,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
                        "line": 70
                    }, {
                        "index": 25,
                        "namespace": null,
                        "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
                        "line": 152
                    }],
                    "duration": 0.00068,
                    "duration_str": "680\u03bcs",
                    "stmt_id": "\/app\/Helpers\/AppHelper.php:627",
                    "connection": "tawreedtech_booking"
                }]
            },
            "models": {
                "data": {
                    "Modules\\Core\\Models\\Attributes": 6,
                    "Modules\\Core\\Models\\Terms": 42,
                    "Modules\\Hotel\\Models\\HotelTerm": 21,
                    "Modules\\Location\\Models\\LocationCategory": 3,
                    "App\\User": 2,
                    "Modules\\Review\\Models\\Review": 6,
                    "Modules\\Location\\Models\\Location": 2,
                    "Modules\\Hotel\\Models\\Hotel": 5,
                    "Modules\\User\\Models\\Role": 1,
                    "App\\Models\\User": 1
                },
                "count": 89
            },
            "auth": {
                "guards": {
                    "web": "array:2 [\n  \"name\" => \"admin@admin.com\"\n  \"user\" => array:42 [\n    \"id\" => 1\n    \"name\" => \"tawreed tech\"\n    \"first_name\" => \"Tawreed\"\n    \"last_name\" => \"Tech\"\n    \"business_name\" => \"tawreed tech\"\n    \"email\" => \"admin@admin.com\"\n    \"email_verified_at\" => \"2023-07-12T11:09:59.000000Z\"\n    \"two_factor_secret\" => null\n    \"two_factor_recovery_codes\" => null\n    \"address\" => null\n    \"address2\" => null\n    \"phone\" => \"0543798662\"\n    \"birthday\" => null\n    \"city\" => \"Riyadh\"\n    \"state\" => \"riyasdh\"\n    \"country\" => \"SA\"\n    \"zip_code\" => 12221\n    \"last_login_at\" => null\n    \"avatar_id\" => 226\n    \"bio\" => \"<p>We're designers who have fallen in love with creating spaces for others to reflect, reset, and create. We split our time between two deserts (the Mojave, and the Sonoran). We love the way the heat sinks into our bones, the vibrant sunsets, and the wildlife we get to call our neighbors.<\/p>\"\n    \"status\" => \"publish\"\n    \"create_user\" => null\n    \"update_user\" => null\n    \"vendor_commission_amount\" => null\n    \"vendor_commission_type\" => null\n    \"need_update_pw\" => 0\n    \"role_id\" => 1\n    \"deleted_at\" => null\n    \"created_at\" => \"2023-07-12T11:09:59.000000Z\"\n    \"updated_at\" => \"2023-07-12T11:53:05.000000Z\"\n    \"payment_gateway\" => null\n    \"total_guests\" => null\n    \"locale\" => null\n    \"user_name\" => \"tawreed\"\n    \"verify_submit_status\" => null\n    \"is_verified\" => null\n    \"active_status\" => 0\n    \"dark_mode\" => 0\n    \"messenger_color\" => \"#2180f3\"\n    \"stripe_customer_id\" => null\n    \"total_before_fees\" => null\n    \"role\" => array:10 [\n      \"id\" => 1\n      \"name\" => \"administrator\"\n      \"code\" => \"administrator\"\n      \"commission\" => null\n      \"commission_type\" => \"default\"\n      \"create_user\" => null\n      \"update_user\" => null\n      \"status\" => null\n      \"created_at\" => \"2023-07-12T11:09:59.000000Z\"\n      \"updated_at\" => \"2023-07-12T11:09:59.000000Z\"\n    ]\n  ]\n]",
                    "sanctum": "null"
                },
                "names": "web: admin@admin.com"
            },
            "gate": {
                "count": 0,
                "messages": []
            },
            "session": {
                "login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d": "1",
                "_token": "vXshe4q7uxJCZyL1V8jPaNuOx2Cp89skdwSFD6BE",
                "_flash": "array:2 [\n  \"old\" => []\n  \"new\" => []\n]",
                "_previous": "array:1 [\n  \"url\" => \"http:\/\/localhost:8001\/hotel\/hotel-stanford\"\n]",
                "PHPDEBUGBAR_STACK_DATA": "[]"
            },
            "request": {
                "path_info": "\/hotel\/hotel-stanford",
                "status_code": "<pre class=sf-dump id=sf-dump-1223521353 data-indent-pad=\"  \"><span class=sf-dump-num>200<\/span>\n<\/pre><script>Sfdump(\"sf-dump-1223521353\", {\"maxDepth\":0})<\/script>\n",
                "status_text": "OK",
                "format": "html",
                "content_type": "text\/html; charset=UTF-8",
                "request_query": "<pre class=sf-dump id=sf-dump-1855728196 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-1855728196\", {\"maxDepth\":0})<\/script>\n",
                "request_request": "<pre class=sf-dump id=sf-dump-878690532 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-878690532\", {\"maxDepth\":0})<\/script>\n",
                "request_headers": "<pre class=sf-dump id=sf-dump-481365166 data-indent-pad=\"  \"><span class=sf-dump-note>array:17<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>host<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"14 characters\">localhost:8001<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>connection<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"65 characters\">&quot;Not\/A)Brand&quot;;v=&quot;99&quot;, &quot;Google Chrome&quot;;v=&quot;115&quot;, &quot;Chromium&quot;;v=&quot;115&quot;<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua-mobile<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"2 characters\">?0<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua-platform<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"7 characters\">&quot;Linux&quot;<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>upgrade-insecure-requests<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str>1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>dnt<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str>1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>user-agent<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"101 characters\">Mozilla\/5.0 (X11; Linux x86_64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/115.0.0.0 Safari\/537.36<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"135 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.7<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-site<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"11 characters\">same-origin<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-mode<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"8 characters\">navigate<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-user<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"2 characters\">?1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-dest<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"8 characters\">document<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>referer<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"22 characters\">http:\/\/localhost:8001\/<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-encoding<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"17 characters\">gzip, deflate, br<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-language<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"59 characters\">en-SD,en;q=0.9,ar-SD;q=0.8,ar;q=0.7,en-GB;q=0.6,en-US;q=0.5<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cookie<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"2912 characters\">lhc_per={%22vid%22:%224f0e40f6efdb230585f2%22%2C%22ex%22:16910}; 6valley_cookie_consent=accepted; remember_admin_59ba36addc2b2f9401580f014c7f58ea4e30989d=eyJpdiI6Inc4R2JzM1BNVThrRDl1SFB4djJ5Wmc9PSIsInZhbHVlIjoiYzJLZTdsRFUvUFBQUXdYc2pRMEpJYWxFY1UyeVgxT0E1czZIUXVJOVVpNUxULyt2TWw5K2JrOGt1VDB1OE1DOWw2eXhIS25BR1diNGovd0t1NHVXd1FRRll4NzY5ejFodEozWDZtR0Z4emF2b3NIV1JmTEVCS3ExZnU3R0sxZW81dThVSzdmQm1sOE9LSzUyaVFMTHkyZ1NoWFUrS0dmQWtrL0RnS0dEaFFyalVxZURGcE9zeEg4dGpxU1AycGRxUllGTExDL2JnRFdRVjg5Y2NzSHdKOU5MMlRCWG9MTzJsV2NURUF5ZWhxWT0iLCJtYWMiOiIyY2Q1ZDc4MTczMDM4YTI5NzNlNzViZGIxYWE0OTI4ZTJiZDAwNmFiOWU5OWU0M2I4Y2U3NzM3ODJmMzVlNjQ4IiwidGFnIjoiIn0%3D; booking_cookie_agreement_enable=eyJpdiI6Ikd4aHhtR2JKWU0rL0VFeGh4SkpzM1E9PSIsInZhbHVlIjoiSlBtR0g3cm9QeXZTY05qVUZDa3lMM0srUm5HaWw5Szc4TVhNSDhnQlp3UVFtTDZkWENVUzVINnFQNWZGWWJUKyIsIm1hYyI6IjEwYmMyNjQwMjBmN2MwNTUyOGJmNTE3ZTU4YmVmYTk0N2I0ZDNlOTRkNTk4OWFlMGEyMjliNDkyMjg3ZDk5N2EiLCJ0YWciOiIifQ%3D%3D; remember_web_59ba36addc2b2f9401580f014c7f58ea4e30989d=eyJpdiI6IktKeW15bkg1Y25Gb1ZESWVVTWc2WXc9PSIsInZhbHVlIjoiMEc3cDVrVmd3QXp4UjEvMzdudCtTYUJDYzZDMjhiVGtvZDBhYzJWNC9LQ2RJbjI5UWpCOVVXdG1NaUFTWXBXZlh4aU5ERGlqc2JnOStDNVIvZFM4UURwUTVVNzlrS2VNcHI1cEZiVzRTL1pOZEtNbHAyK0QweFpCeVliWU9KZi9kcStJa1pZSXRsRUsxYjZNZ1NYZmFsRTVTZWhudEdUNUIyQnhXVzBqbkFyanA3RVlwUVdnVEY3ODJEWDVLSEhjT05oUHF4Y1g4c0VwVHRFM3lPZTVjTnVhZTlERkFOZUUvY0FjOW4rWlYzND0iLCJtYWMiOiJhZDIyZTY4NzlkYjg5YzZlMjhkNDVmZDkxNTJlOGQ1OTA5NzY2MGU3ZjY4MDA4N2I4MmIyMWFkY2UxZTA1MWE0IiwidGFnIjoiIn0%3D; benods_session=eyJpdiI6IkNFWE5zODJhU0FPNUxldXRMMm5aN2c9PSIsInZhbHVlIjoicytmR1lNc0ZJUHNkalNpaWdvSlZYTFlyVzJITnBXQ3lJbThWaDhmVGFMQ0lQcWJSemFmZzhlVWw1QmFWNENkL3NpOEpmdDJJNU9SZWpydWtVK0RGTzJzMHgwQkxabjc1Sk5hZ0EwZi9hV3dqVG5VM3FVWTJRbVdoRjlkRlJ0bTQiLCJtYWMiOiI2MTRlZmIwMzBjYzI2NWFlYTAwYmM2Y2Y4MDU3Y2EwN2E0OWQwZmU0MzVmNWMyOTlkMjcyMWNmZGViMWNhMmZiIiwidGFnIjoiIn0%3D; booking_core_session=eyJpdiI6InJyZmdwendpeHZzU3RCclNhSWZHZUE9PSIsInZhbHVlIjoiaXUzdDhmdjUwb1kwZVVscVhqWjJXVFNUT1VxamhHMTRTNVE2eFBYSmJ6ZXlGb05hU1BlMVBxMG1tQ2RWNEd1YjNoQ29IS0MzTEhEQlFUSHh3RVN4OXFKaE10ZmVLazVDdEpMRHRuL2MrTThuTW05amd5OFhNOExYSHNERjI1L2QiLCJtYWMiOiI0Yjc2ODFkY2YwMDdmN2E4ZDI5YTg3MzhiYjRhYTFkZjc0MWQyN2JkODMwOWUzMTAyZDI1ZTViOTJkZjY0YmU2IiwidGFnIjoiIn0%3D; XSRF-TOKEN=eyJpdiI6Im9MN2Vwc1JXZUV0REh6ZzlMaHF3SFE9PSIsInZhbHVlIjoiU29keWl2eTNzd3ROQjUveW45MDVHMXovWFJya0djME10OUwrWlRZYXpEeTdkTEdzNjRHSjIzeVlWNXNJRHNhN1ljckVlc2VDWFlQbUlKaEN0ckVmSS9vZ2VsbmZHazFXbHhubFZoVkFxd1NsZzRFakpyREE5OFhOc3BON1ZraDkiLCJtYWMiOiI5OGYwOGY1YzRjN2U3MTJlNmVkMGQ0NmIxNjZhNWQ1MTI0N2E4MzMwNzNkOTAwMjZiNWYzODg2M2JjMzI4NmY3IiwidGFnIjoiIn0%3D; reop_session=eyJpdiI6ImhXN1I5UVBSYnN3VTVTVFAzT2hmRFE9PSIsInZhbHVlIjoiWURORHlBbWR0L2k1eHRoeVZ4Z2tIUlJFdm1oZzZwSHg1TmFoUUtQcXlJaXVJcU9lQ0UzbHcwTFR6MktyQ095UG80Ni9hSXRPTWZFZ01mRVhPY0VIbHFUeTF0UHhFL3lNeEhpeGxIRVczMVFoc1B6QTJBTWJGazVFR2xIT25jajUiLCJtYWMiOiIyN2E5MzY3MjZkOTc4NjFhZThiYjU4YTQxYzBjYzVmZjJhNWQxZTFhODdmMzJjNWIwODIyNGQ5OTc1MWE5OTRlIiwidGFnIjoiIn0%3D<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-481365166\", {\"maxDepth\":0})<\/script>\n",
                "request_server": "<pre class=sf-dump id=sf-dump-148003406 data-indent-pad=\"  \"><span class=sf-dump-note>array:32<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>DOCUMENT_ROOT<\/span>\" => \"<span class=sf-dump-str title=\"62 characters\">\/home\/montaser\/Desktop\/projects\/tawreed-booking\/booking\/public<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">127.0.0.1<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_PORT<\/span>\" => \"<span class=sf-dump-str title=\"5 characters\">43148<\/span>\"\n  \"<span class=sf-dump-key>SERVER_SOFTWARE<\/span>\" => \"<span class=sf-dump-str title=\"29 characters\">PHP 8.1.21 Development Server<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PROTOCOL<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">HTTP\/1.1<\/span>\"\n  \"<span class=sf-dump-key>SERVER_NAME<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">127.0.0.1<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PORT<\/span>\" => \"<span class=sf-dump-str title=\"4 characters\">8001<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_URI<\/span>\" => \"<span class=sf-dump-str title=\"21 characters\">\/hotel\/hotel-stanford<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_METHOD<\/span>\" => \"<span class=sf-dump-str title=\"3 characters\">GET<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_NAME<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">\/index.php<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_FILENAME<\/span>\" => \"<span class=sf-dump-str title=\"72 characters\">\/home\/montaser\/Desktop\/projects\/tawreed-booking\/booking\/public\/index.php<\/span>\"\n  \"<span class=sf-dump-key>PATH_INFO<\/span>\" => \"<span class=sf-dump-str title=\"21 characters\">\/hotel\/hotel-stanford<\/span>\"\n  \"<span class=sf-dump-key>PHP_SELF<\/span>\" => \"<span class=sf-dump-str title=\"31 characters\">\/index.php\/hotel\/hotel-stanford<\/span>\"\n  \"<span class=sf-dump-key>HTTP_HOST<\/span>\" => \"<span class=sf-dump-str title=\"14 characters\">localhost:8001<\/span>\"\n  \"<span class=sf-dump-key>HTTP_CONNECTION<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA<\/span>\" => \"<span class=sf-dump-str title=\"65 characters\">&quot;Not\/A)Brand&quot;;v=&quot;99&quot;, &quot;Google Chrome&quot;;v=&quot;115&quot;, &quot;Chromium&quot;;v=&quot;115&quot;<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA_MOBILE<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">?0<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA_PLATFORM<\/span>\" => \"<span class=sf-dump-str title=\"7 characters\">&quot;Linux&quot;<\/span>\"\n  \"<span class=sf-dump-key>HTTP_UPGRADE_INSECURE_REQUESTS<\/span>\" => \"<span class=sf-dump-str>1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_DNT<\/span>\" => \"<span class=sf-dump-str>1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_USER_AGENT<\/span>\" => \"<span class=sf-dump-str title=\"101 characters\">Mozilla\/5.0 (X11; Linux x86_64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/115.0.0.0 Safari\/537.36<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT<\/span>\" => \"<span class=sf-dump-str title=\"135 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.7<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_SITE<\/span>\" => \"<span class=sf-dump-str title=\"11 characters\">same-origin<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_MODE<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">navigate<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_USER<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">?1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_DEST<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">document<\/span>\"\n  \"<span class=sf-dump-key>HTTP_REFERER<\/span>\" => \"<span class=sf-dump-str title=\"22 characters\">http:\/\/localhost:8001\/<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_ENCODING<\/span>\" => \"<span class=sf-dump-str title=\"17 characters\">gzip, deflate, br<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_LANGUAGE<\/span>\" => \"<span class=sf-dump-str title=\"59 characters\">en-SD,en;q=0.9,ar-SD;q=0.8,ar;q=0.7,en-GB;q=0.6,en-US;q=0.5<\/span>\"\n  \"<span class=sf-dump-key>HTTP_COOKIE<\/span>\" => \"<span class=sf-dump-str title=\"2912 characters\">lhc_per={%22vid%22:%224f0e40f6efdb230585f2%22%2C%22ex%22:16910}; 6valley_cookie_consent=accepted; remember_admin_59ba36addc2b2f9401580f014c7f58ea4e30989d=eyJpdiI6Inc4R2JzM1BNVThrRDl1SFB4djJ5Wmc9PSIsInZhbHVlIjoiYzJLZTdsRFUvUFBQUXdYc2pRMEpJYWxFY1UyeVgxT0E1czZIUXVJOVVpNUxULyt2TWw5K2JrOGt1VDB1OE1DOWw2eXhIS25BR1diNGovd0t1NHVXd1FRRll4NzY5ejFodEozWDZtR0Z4emF2b3NIV1JmTEVCS3ExZnU3R0sxZW81dThVSzdmQm1sOE9LSzUyaVFMTHkyZ1NoWFUrS0dmQWtrL0RnS0dEaFFyalVxZURGcE9zeEg4dGpxU1AycGRxUllGTExDL2JnRFdRVjg5Y2NzSHdKOU5MMlRCWG9MTzJsV2NURUF5ZWhxWT0iLCJtYWMiOiIyY2Q1ZDc4MTczMDM4YTI5NzNlNzViZGIxYWE0OTI4ZTJiZDAwNmFiOWU5OWU0M2I4Y2U3NzM3ODJmMzVlNjQ4IiwidGFnIjoiIn0%3D; booking_cookie_agreement_enable=eyJpdiI6Ikd4aHhtR2JKWU0rL0VFeGh4SkpzM1E9PSIsInZhbHVlIjoiSlBtR0g3cm9QeXZTY05qVUZDa3lMM0srUm5HaWw5Szc4TVhNSDhnQlp3UVFtTDZkWENVUzVINnFQNWZGWWJUKyIsIm1hYyI6IjEwYmMyNjQwMjBmN2MwNTUyOGJmNTE3ZTU4YmVmYTk0N2I0ZDNlOTRkNTk4OWFlMGEyMjliNDkyMjg3ZDk5N2EiLCJ0YWciOiIifQ%3D%3D; remember_web_59ba36addc2b2f9401580f014c7f58ea4e30989d=eyJpdiI6IktKeW15bkg1Y25Gb1ZESWVVTWc2WXc9PSIsInZhbHVlIjoiMEc3cDVrVmd3QXp4UjEvMzdudCtTYUJDYzZDMjhiVGtvZDBhYzJWNC9LQ2RJbjI5UWpCOVVXdG1NaUFTWXBXZlh4aU5ERGlqc2JnOStDNVIvZFM4UURwUTVVNzlrS2VNcHI1cEZiVzRTL1pOZEtNbHAyK0QweFpCeVliWU9KZi9kcStJa1pZSXRsRUsxYjZNZ1NYZmFsRTVTZWhudEdUNUIyQnhXVzBqbkFyanA3RVlwUVdnVEY3ODJEWDVLSEhjT05oUHF4Y1g4c0VwVHRFM3lPZTVjTnVhZTlERkFOZUUvY0FjOW4rWlYzND0iLCJtYWMiOiJhZDIyZTY4NzlkYjg5YzZlMjhkNDVmZDkxNTJlOGQ1OTA5NzY2MGU3ZjY4MDA4N2I4MmIyMWFkY2UxZTA1MWE0IiwidGFnIjoiIn0%3D; benods_session=eyJpdiI6IkNFWE5zODJhU0FPNUxldXRMMm5aN2c9PSIsInZhbHVlIjoicytmR1lNc0ZJUHNkalNpaWdvSlZYTFlyVzJITnBXQ3lJbThWaDhmVGFMQ0lQcWJSemFmZzhlVWw1QmFWNENkL3NpOEpmdDJJNU9SZWpydWtVK0RGTzJzMHgwQkxabjc1Sk5hZ0EwZi9hV3dqVG5VM3FVWTJRbVdoRjlkRlJ0bTQiLCJtYWMiOiI2MTRlZmIwMzBjYzI2NWFlYTAwYmM2Y2Y4MDU3Y2EwN2E0OWQwZmU0MzVmNWMyOTlkMjcyMWNmZGViMWNhMmZiIiwidGFnIjoiIn0%3D; booking_core_session=eyJpdiI6InJyZmdwendpeHZzU3RCclNhSWZHZUE9PSIsInZhbHVlIjoiaXUzdDhmdjUwb1kwZVVscVhqWjJXVFNUT1VxamhHMTRTNVE2eFBYSmJ6ZXlGb05hU1BlMVBxMG1tQ2RWNEd1YjNoQ29IS0MzTEhEQlFUSHh3RVN4OXFKaE10ZmVLazVDdEpMRHRuL2MrTThuTW05amd5OFhNOExYSHNERjI1L2QiLCJtYWMiOiI0Yjc2ODFkY2YwMDdmN2E4ZDI5YTg3MzhiYjRhYTFkZjc0MWQyN2JkODMwOWUzMTAyZDI1ZTViOTJkZjY0YmU2IiwidGFnIjoiIn0%3D; XSRF-TOKEN=eyJpdiI6Im9MN2Vwc1JXZUV0REh6ZzlMaHF3SFE9PSIsInZhbHVlIjoiU29keWl2eTNzd3ROQjUveW45MDVHMXovWFJya0djME10OUwrWlRZYXpEeTdkTEdzNjRHSjIzeVlWNXNJRHNhN1ljckVlc2VDWFlQbUlKaEN0ckVmSS9vZ2VsbmZHazFXbHhubFZoVkFxd1NsZzRFakpyREE5OFhOc3BON1ZraDkiLCJtYWMiOiI5OGYwOGY1YzRjN2U3MTJlNmVkMGQ0NmIxNjZhNWQ1MTI0N2E4MzMwNzNkOTAwMjZiNWYzODg2M2JjMzI4NmY3IiwidGFnIjoiIn0%3D; reop_session=eyJpdiI6ImhXN1I5UVBSYnN3VTVTVFAzT2hmRFE9PSIsInZhbHVlIjoiWURORHlBbWR0L2k1eHRoeVZ4Z2tIUlJFdm1oZzZwSHg1TmFoUUtQcXlJaXVJcU9lQ0UzbHcwTFR6MktyQ095UG80Ni9hSXRPTWZFZ01mRVhPY0VIbHFUeTF0UHhFL3lNeEhpeGxIRVczMVFoc1B6QTJBTWJGazVFR2xIT25jajUiLCJtYWMiOiIyN2E5MzY3MjZkOTc4NjFhZThiYjU4YTQxYzBjYzVmZjJhNWQxZTFhODdmMzJjNWIwODIyNGQ5OTc1MWE5OTRlIiwidGFnIjoiIn0%3D<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_TIME_FLOAT<\/span>\" => <span class=sf-dump-num>1692006922.8137<\/span>\n  \"<span class=sf-dump-key>REQUEST_TIME<\/span>\" => <span class=sf-dump-num>1692006922<\/span>\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-148003406\", {\"maxDepth\":0})<\/script>\n",
                "request_cookies": "<pre class=sf-dump id=sf-dump-1011616970 data-indent-pad=\"  \"><span class=sf-dump-note>array:9<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>lhc_per<\/span>\" => <span class=sf-dump-const>null<\/span>\n  \"<span class=sf-dump-key>6valley_cookie_consent<\/span>\" => <span class=sf-dump-const>null<\/span>\n  \"<span class=sf-dump-key>remember_admin_59ba36addc2b2f9401580f014c7f58ea4e30989d<\/span>\" => <span class=sf-dump-const>null<\/span>\n  \"<span class=sf-dump-key>booking_cookie_agreement_enable<\/span>\" => \"<span class=sf-dump-str>1<\/span>\"\n  \"<span class=sf-dump-key>remember_web_59ba36addc2b2f9401580f014c7f58ea4e30989d<\/span>\" => <span class=sf-dump-const>null<\/span>\n  \"<span class=sf-dump-key>benods_session<\/span>\" => <span class=sf-dump-const>null<\/span>\n  \"<span class=sf-dump-key>booking_core_session<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">cuVafBmpvlNP3XYqzkgRhIVYU0MlAQoqVxIKjs7P<\/span>\"\n  \"<span class=sf-dump-key>XSRF-TOKEN<\/span>\" => <span class=sf-dump-const>null<\/span>\n  \"<span class=sf-dump-key>reop_session<\/span>\" => <span class=sf-dump-const>null<\/span>\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1011616970\", {\"maxDepth\":0})<\/script>\n",
                "response_headers": "<pre class=sf-dump id=sf-dump-291884168 data-indent-pad=\"  \"><span class=sf-dump-note>array:5<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>content-type<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"24 characters\">text\/html; charset=UTF-8<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cache-control<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"17 characters\">no-cache, private<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>date<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"29 characters\">Mon, 14 Aug 2023 09:55:22 GMT<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>set-cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"428 characters\">XSRF-TOKEN=eyJpdiI6Ikh4bEMyclNZV2Q5STE3cDRWNTlYT1E9PSIsInZhbHVlIjoidjZ3bjJLZ2N4WHJ6Mm1WRE1nb1hhcTlrQ3FXWXpqNUtLRmp6dlFxK014NGpxNmVtckFXUWdwaFFqc0doOCtjNW1tQVk1Vk5RR3pTYk1hUjJpZE05SWdBVjBRWno0VXlzdXJoM2grd0RGY2JrVjQyN3NWMHFtWWJyc0tvK1FNN3UiLCJtYWMiOiJiZmNiYWJlMTExNDljMDlkYjBlNDkwYzdiZjg2OTA5MWIxMjZjNzkxM2JlNjlhMTQxOTJhNmU3NzQ3MmNlZjlkIiwidGFnIjoiIn0%3D; expires=Mon, 14-Aug-2023 11:55:23 GMT; Max-Age=7200; path=\/; samesite=lax<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"448 characters\">booking_core_session=eyJpdiI6ImMzYy9uMW1aNWhPMzRIZjFXbkF0T1E9PSIsInZhbHVlIjoiWk1uK3lFdG9sSGwvdEthUFFiUlBtS2dMaWRYSzJsUlhNREIzSWVDZDllVGFJZWROUDNxdkNwT01VMkk4VlhZWnk0U3JLYnBEM3FRUGszcWxBenZObDVCVWlLOE5ZMENkYVFuMWVMUXdMYVdhQ0NiSFh6V0h3WW9ST2NBejhGeG8iLCJtYWMiOiI2ZWY2NDYzNDJkZGM3ZDBkOTk2NWJiMTVhNzFmODAxZjkyYjAwNzFmNjNiZWM5NGIwNzU1OGIxMzExNjBiMjFlIiwidGFnIjoiIn0%3D; expires=Mon, 14-Aug-2023 11:55:23 GMT; Max-Age=7200; path=\/; httponly; samesite=lax<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>Set-Cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"400 characters\">XSRF-TOKEN=eyJpdiI6Ikh4bEMyclNZV2Q5STE3cDRWNTlYT1E9PSIsInZhbHVlIjoidjZ3bjJLZ2N4WHJ6Mm1WRE1nb1hhcTlrQ3FXWXpqNUtLRmp6dlFxK014NGpxNmVtckFXUWdwaFFqc0doOCtjNW1tQVk1Vk5RR3pTYk1hUjJpZE05SWdBVjBRWno0VXlzdXJoM2grd0RGY2JrVjQyN3NWMHFtWWJyc0tvK1FNN3UiLCJtYWMiOiJiZmNiYWJlMTExNDljMDlkYjBlNDkwYzdiZjg2OTA5MWIxMjZjNzkxM2JlNjlhMTQxOTJhNmU3NzQ3MmNlZjlkIiwidGFnIjoiIn0%3D; expires=Mon, 14-Aug-2023 11:55:23 GMT; path=\/<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"420 characters\">booking_core_session=eyJpdiI6ImMzYy9uMW1aNWhPMzRIZjFXbkF0T1E9PSIsInZhbHVlIjoiWk1uK3lFdG9sSGwvdEthUFFiUlBtS2dMaWRYSzJsUlhNREIzSWVDZDllVGFJZWROUDNxdkNwT01VMkk4VlhZWnk0U3JLYnBEM3FRUGszcWxBenZObDVCVWlLOE5ZMENkYVFuMWVMUXdMYVdhQ0NiSFh6V0h3WW9ST2NBejhGeG8iLCJtYWMiOiI2ZWY2NDYzNDJkZGM3ZDBkOTk2NWJiMTVhNzFmODAxZjkyYjAwNzFmNjNiZWM5NGIwNzU1OGIxMzExNjBiMjFlIiwidGFnIjoiIn0%3D; expires=Mon, 14-Aug-2023 11:55:23 GMT; path=\/; httponly<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-291884168\", {\"maxDepth\":0})<\/script>\n",
                "session_attributes": "<pre class=sf-dump id=sf-dump-178920573 data-indent-pad=\"  \"><span class=sf-dump-note>array:5<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d<\/span>\" => <span class=sf-dump-num>1<\/span>\n  \"<span class=sf-dump-key>_token<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">vXshe4q7uxJCZyL1V8jPaNuOx2Cp89skdwSFD6BE<\/span>\"\n  \"<span class=sf-dump-key>_flash<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>old<\/span>\" => []\n    \"<span class=sf-dump-key>new<\/span>\" => []\n  <\/samp>]\n  \"<span class=sf-dump-key>_previous<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>url<\/span>\" => \"<span class=sf-dump-str title=\"42 characters\">http:\/\/localhost:8001\/hotel\/hotel-stanford<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>PHPDEBUGBAR_STACK_DATA<\/span>\" => []\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-178920573\", {\"maxDepth\":0})<\/script>\n"
            }
        }, "Xa74dd5165f702b08ec8006c1a7fbf60f");
    </script>
{{-- </body> --}}

