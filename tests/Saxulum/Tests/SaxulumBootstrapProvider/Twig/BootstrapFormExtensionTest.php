<?php
/**
 * This file is part of BraincraftedBootstrapBundle.
 *
 * (c) 2012-2013 by Florian Eckerstorfer
 */

namespace Saxulum\Tests\SaxulumBootstrapProvider\Twig;

use Saxulum\SaxulumBootstrapProvider\Twig\BootstrapFormExtension;

/**
 * BootstrapFormExtensionTest
 *
 * This test is only useful if you consider that it will be run by Travis on every supported PHP
 * configuration. We live in a world where should not have too manually test every commit with every
 * version of PHP. And I know exactly that I will commit short array syntax all the time and break
 * compatibility with PHP 5.3
 *
 * @category   Test
 * @package    BraincraftedBootstrapBundle
 * @subpackage Twig
 * @author     Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright  2012-2013 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       http://bootstrap.braincrafted.com Bootstrap for Symfony2
 * @group      unit
 */
class BootstrapFormExtensionTest extends \PHPUnit_Framework_TestCase
{
    /** @var BootstrapFormExtension */
    private $extension;

    /**
     * Set up
     */
    public function setUp()
    {
        $this->extension = new BootstrapFormExtension();
    }

    /**
     * @covers Saxulum\SaxulumBootstrapProvider\Twig\BootstrapFormExtension::getFunctions()
     */
    public function testGetFunctions()
    {
        $this->assertCount(14, $this->extension->getFunctions());
    }

    /**
     * @covers Saxulum\SaxulumBootstrapProvider\Twig\BootstrapFormExtension::setStyle()
     * @covers Saxulum\SaxulumBootstrapProvider\Twig\BootstrapFormExtension::getStyle()
     */
    public function testSetStyleGetStyle()
    {
        $this->extension->setStyle('inline');
        $this->assertEquals('inline', $this->extension->getStyle());
    }

    /**
     * @covers Saxulum\SaxulumBootstrapProvider\Twig\BootstrapFormExtension::setColSize()
     * @covers Saxulum\SaxulumBootstrapProvider\Twig\BootstrapFormExtension::getColSize()
     */
    public function testSetColSizeGetColSize()
    {
        $this->extension->setColSize('sm');
        $this->assertEquals('sm', $this->extension->getColSize());
    }

    /**
     * @covers Saxulum\SaxulumBootstrapProvider\Twig\BootstrapFormExtension::setWidgetCol()
     * @covers Saxulum\SaxulumBootstrapProvider\Twig\BootstrapFormExtension::getWidgetCol()
     */
    public function testSetWidgetColGetWidgetCol()
    {
        $this->extension->setWidgetCol(5);
        $this->assertEquals(5, $this->extension->getWidgetCol());
    }

    /**
     * @covers Saxulum\SaxulumBootstrapProvider\Twig\BootstrapFormExtension::setLabelCol()
     * @covers Saxulum\SaxulumBootstrapProvider\Twig\BootstrapFormExtension::getLabelCol()
     */
    public function testSetLabelColGetLabelCol()
    {
        $this->extension->setLabelCol(4);
        $this->assertEquals(4, $this->extension->getLabelCol());
    }

    /**
     * @covers Saxulum\SaxulumBootstrapProvider\Twig\BootstrapFormExtension::setSimpleCol()
     * @covers Saxulum\SaxulumBootstrapProvider\Twig\BootstrapFormExtension::getSimpleCol()
     */
    public function testSetSimpleColGetSimpleCol()
    {
        $this->extension->setSimpleCol(8);
        $this->assertEquals(8, $this->extension->getSimpleCol());
    }

    /**
     * @covers Saxulum\SaxulumBootstrapProvider\Twig\BootstrapFormExtension::getName()
     */
    public function testGetName()
    {
        $this->assertEquals('braincrafted_bootstrap_form', $this->extension->getName());
    }
}
