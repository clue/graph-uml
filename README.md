# clue/graph-uml 

[![Build Status](https://travis-ci.org/clue/graph-uml.png?branch=master)](https://travis-ci.org/clue/graph-uml)
[![installs on Packagist](https://img.shields.io/packagist/dt/clue/graph-uml?color=blue&label=installs%20on%20Packagist)](https://packagist.org/packages/clue/graph-uml)

Generate UML class diagrams by reflection for your PHP projects

> Note: This project is in beta stage! Feel free to report any issues you encounter.

## Quickstart example

Once [installed](#install), you can use the following code to draw an UML class
diagram for your existing classes:

```php
// initialize an empty graph and the UML class diagram builder
$graph = new Fhaculty\Graph\Graph();
$builder = new Fhaculty\Graph\Uml\ClassDiagramBuilder($graph);

// let's add some classes to the diagram
$builder->createVertexClass('Fhaculty\Graph\Uml\ClassDiagramBuilder');

// display graph as svg image
$graphviz = new Fhaculty\Graph\GraphViz($graph);
$graphviz->display();
```

## Install

The recommended way to install this library is [through composer](http://getcomposer.org). [New to composer?](http://getcomposer.org/doc/00-intro.md)

```JSON
{
    "require": {
        "clue/graph-uml": "0.2.*"
    }
}
```

Additionally, you'll have to install GraphViz (`dot` executable).
Users of Debian/Ubuntu-based distributions may simply invoke:

```bash
$ sudo apt-get install graphviz
```

Windows users have to [download GraphViZ for Windows](http://www.graphviz.org/Download_windows.php) and remaining
users should install from [GraphViz homepage](http://www.graphviz.org/Download.php).

## License

MIT
