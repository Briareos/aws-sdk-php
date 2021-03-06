import sys, os, subprocess
from sphinx.highlighting import lexers
from pygments.lexers.web import PhpLexer


lexers['php'] = PhpLexer(startinline=True, linenos=1)
lexers['php-annotations'] = PhpLexer(startinline=True, linenos=1)
primary_domain = 'php'

project = u'AWS SDK for PHP'
copyright = u'2015, Amazon Web Services'
master_doc = 'index'

sys.path.append(os.path.abspath('_ext/'))
extensions = ['aws']

templates_path = ['_templates']
source_suffix = '.rst'

# Parse the version from the latest git tag
version_command = 'git describe --abbrev=0 --tags'
git_verson = subprocess.check_output(version_command, shell=True)
version = os.getenv('VERSION', git_verson.strip())

exclude_patterns = ['_build']
html_static_path = ['_static']

# -- HTML theme settings ------------------------------------------------

html_show_sourcelink = False
html_sidebars = {
    '**': ['sidebarlogo.html',
           'localtoc.html',
           'searchbox.html',
           'feedback.html']
}

import guzzle_sphinx_theme
extensions.append("guzzle_sphinx_theme")
html_translator_class = 'guzzle_sphinx_theme.HTMLTranslator'
html_theme_path = guzzle_sphinx_theme.html_theme_path()
html_theme = 'guzzle_sphinx_theme'

# Guzzle theme options (see theme.conf for more information)
html_theme_options = {
    # hack to add tracking
    "google_analytics_account": os.getenv('TRACKING', False),
    "project_nav_name": "AWS SDK for PHP",
    "github_user": "aws",
    "github_repo": "aws-sdk-php",
    "base_url": "http://docs.aws.amazon.com/aws-sdk-php/guide/latest/"
}
