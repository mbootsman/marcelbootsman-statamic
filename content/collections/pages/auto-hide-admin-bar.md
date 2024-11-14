---
id: b60f0341-6ea2-4fdb-ba9d-cc3f4525b3f0
blueprint: page
title: 'Auto Hide Admin Bar'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: '0.5'
updated_by: 9ee9b5d3-6247-4f7a-80d0-f5574e1a355a
updated_at: 1731332092
template: blog/show
page_builder:
  -
    id: m345lwid
    article:
      -
        type: set
        attrs:
          id: m345sblb
          values:
            type: image
            image: icon-256x256.png
            size: md
      -
        type: paragraph
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Auto Hide Admin Bar makes the WordPress Toolbar disappear – and reappear when hovering the mouse pointer over the top of the browser window.'
          -
            type: hardBreak
          -
            type: text
            text: 'You end up with a clean view of your site, and keep having access to the WordPress Toolbar.'
          -
            type: hardBreak
          -
            type: text
            text: 'If you have any comments or questions, please use '
          -
            type: text
            marks:
              -
                type: link
                attrs:
                  href: 'https://github.com/mbootsman/auto-hide-admin-bar/issues'
                  rel: null
                  target: null
                  title: null
            text: 'GitHub Issues'
          -
            type: text
            text: .
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            text: Installation
      -
        type: orderedList
        attrs:
          start: 1
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Download the latest version from the '
                  -
                    type: text
                    marks:
                      -
                        type: link
                        attrs:
                          href: 'https://github.com/mbootsman/auto-hide-admin-bar/releases/latest'
                          rel: null
                          target: null
                          title: null
                    text: 'GitHub repository'
                  -
                    type: text
                    text: .
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Upload '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: auto-hide-admin-bar
                  -
                    type: text
                    text: ' directory to the '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: /wp-content/plugins/
                  -
                    type: text
                    text: ' directory or upload the '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: 'auto-hide-admin-bar-[version].zip'
                  -
                    type: text
                    text: ' as a new plugin in WordPress.'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Activate the plugin through the ‘Plugins’ menu in WordPress'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'We’re all done, now you have an auto hiding Toolbar. Go check it out.'
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            text: Translations
      -
        type: paragraph
        content:
          -
            type: text
            text: 'All available translations will be included in the plugin in the near future. If you want to contribute to the translations please use a PR for adding your .mo file.'
    type: article
    enabled: true
---
