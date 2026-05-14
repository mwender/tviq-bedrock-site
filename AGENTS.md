# TVIQ.io Local Development Site

This is a local development copy of the [TVIQ website](https://tviq.io).

## Technical Stack

- [Roots/Bedrock](https://roots.io/bedrock/) WordPress framework site. Webroot is `web/`, WP core and plugins are managed via Composer.
- Site is built with Elementor and Elementor Pro.
- Theme is `web/app/themes/hello-elementor/`

Our WordPress + Elementor + Hello Theme setup allowed us to build this site entirely "in the browser".

## Local Tools

- Site is a local instance accessible at [https://tviq.test](https://tviq.test) setup with Laravel Valet.
- The WP CLI is available; run from `web/`. Example: `wp --info --path=/Users/mwender/webdev/laravel-valet/bedrock/tviq.io/web`
- The [WordPress MCP Adapter](https://github.com/WordPress/mcp-adapter) and [Elementor MCP](https://github.com/msrbuilds/elementor-mcp) plugins are installed and activated.
- `agent-browser` is available; Browser automation CLI designed for AI agents. Compact text output minimizes context usage.

`agent-browser` examples:
```
# Navigate and get snapshot
agent-browser open tviq.test
agent-browser snapshot -i

# Output:
# - heading "Example Domain" [ref=e1]
# - link "More information..." [ref=e2]

# Interact using refs
agent-browser click @e2
agent-browser screenshot page.png
agent-browser close
```

## Project Assets

- `bin/one-sheet-landing-page.md` — prompt/instructions for building the TVIQ Select one-sheet landing page via Elementor MCP.
- `bin/assets/` — source PDFs and PowerPoint files for the one-sheet page build.
- `web/one-sheet/` — static images served at `https://tviq.test/one-sheet/{filename}` used by the one-sheet landing page. These were migrated from `public/one-sheet/` during the Bedrock conversion.
