<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\FixturesBundle\Admin;

use FSi\Bundle\AdminBundle\Admin\Doctrine\CRUDElement;
use FSi\Bundle\AdminSecurityBundle\Admin\SecuredElementInterface;
use FSi\Component\DataGrid\DataGridFactoryInterface;
use FSi\Component\DataSource\DataSourceFactoryInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Security\Core\SecurityContextInterface;

class PageSettings extends CRUDElement implements SecuredElementInterface
{
    public function isAllowed(SecurityContextInterface $securityContext)
    {
        return $securityContext->isGranted('ROLE_ADMIN');
    }

    public function getClassName()
    {
        return 'FSiFixturesBundle:PageSettings';
    }

    public function getId()
    {
        return 'page_settings';
    }

    public function getName()
    {
        return 'Page settings';
    }

    protected function initDataGrid(DataGridFactoryInterface $factory)
    {
        // TODO: Implement initDataGrid() method.
    }

    protected function initDataSource(DataSourceFactoryInterface $factory)
    {
        // TODO: Implement initDataSource() method.
    }

    protected function initForm(FormFactoryInterface $factory, $data = null)
    {
        // TODO: Implement initForm() method.
    }
}
