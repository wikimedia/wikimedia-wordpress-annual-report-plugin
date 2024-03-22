/**
 * Front end funcionality for report pages.
 */
import './frontend-global.scss';

// Import specific block frontend bundles so that they hot-reload properly
// in-editor. Going through create-block's pattern for frontend block CSS
// reloading does not seem to work as expected.
import './blocks/expandable/frontend.scss';
import './blocks/table-of-contents/frontend.scss';

// Import block styles.
import './styles/core-heading-report-section-heading.scss';
import './styles/core-group-report-overlapping-callout.scss';
import './styles/shiro-accordion-overrides.scss';

// Frontend logic that isn't tied to a custom block.
import './features/core-group-report-overlapping-callout';
