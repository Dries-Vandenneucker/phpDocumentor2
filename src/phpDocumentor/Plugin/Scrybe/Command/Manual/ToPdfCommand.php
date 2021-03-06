<?php
/**
 * phpDocumentor
 *
 * PHP Version 5.3
 *
 * @copyright 2010-2018 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Plugin\Scrybe\Command\Manual;

use phpDocumentor\Plugin\Scrybe\Converter\Format;

/**
 * Command used to tell the application to convert from a format to PDF.
 */
class ToPdfCommand extends BaseConvertCommand
{
    /** @var string The string representation of the output format */
    protected $output_format = Format\Format::PDF;

    /**
     * Defines the name and description for this command and inherits the
     * behaviour of the parent configure.
     *
     * @see ConvertCommandAbstract::configure() for the common business rules.
     */
    protected function configure()
    {
        parent::configure();

        $this->setName('manual:to-pdf');
        $this->setDescription('Generates reference documentation as PDF file');
    }
}
