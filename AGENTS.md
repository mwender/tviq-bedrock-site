# TVIQ.io Local Development Site

This is a local development copy of the [TVIQ website](https://tviq.io).

## Technical Stack

- [Roots/Bedrock](https://roots.io/bedrock/) WordPress framework site. Webroot is `web/`, WP core and plugins are managed via Composer.
- Site is built with Elementor and Elementor Pro.
- Theme is `web/app/themes/hello-elementor/`

Our WordPress + Elementor + Hello Theme setup allowed us to build this site entirely "in the browser".

## Local Tools

- Site is a local instance accessible at [https://tviq.test](https://tviq.test) setup with Laravel Valet.
- The WP CLI is available; run from the project root — `wp-cli.yml` sets `path: web/wp` automatically. Example: `wp plugin list`
- The [WordPress MCP Adapter](https://github.com/WordPress/mcp-adapter) and [Elementor MCP](https://github.com/msrbuilds/elementor-mcp) plugins are installed and activated.
- `agent-browser` is available; Browser automation CLI designed for AI agents. Compact text output minimizes context usage.

**IMPORTANT:** `agent-browser` is a **shell command** — invoke it via the Bash tool. Do NOT search for it via ToolSearch or look for it as an MCP tool. It will not be found there.

`agent-browser` examples:
```
# Navigate to local Valet site (--ignore-https-errors required for *.test on first open)
agent-browser open https://tviq.test --ignore-https-errors

# Chain commands with && — browser daemon persists between calls
agent-browser open https://tviq.test/select-03 --ignore-https-errors && agent-browser wait 800 && agent-browser screenshot /tmp/out.png

# Get snapshot of interactive elements, then interact by ref
agent-browser snapshot -i
# - button "Submit" [ref=e3]
agent-browser click @e3

# Inspect values / computed styles via JS
agent-browser eval "document.getElementById('phone').value"

# View a screenshot inline: save to /tmp/, then use the Read tool on that path
agent-browser screenshot /tmp/debug.png
# → Read /tmp/debug.png

# Reload after editing a file
agent-browser reload

# Close the daemon (required before restarting with new flags)
agent-browser close
```

## Project Assets

- `bin/one-sheet-landing-page.md` — prompt/instructions for building the TVIQ Select one-sheet landing page via Elementor MCP.
- `bin/assets/` — source PDFs and PowerPoint files for the one-sheet page build.
- `web/one-sheet/` — static images served at `https://tviq.test/one-sheet/{filename}` used by the one-sheet landing page. These were migrated from `public/one-sheet/` during the Bedrock conversion.
