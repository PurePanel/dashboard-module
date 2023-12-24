<?php

namespace Anomaly\DashboardModule\Widget;

use Anomaly\DashboardModule\Dashboard\Contract\DashboardRepositoryInterface;
use Anomaly\DashboardModule\Widget\Contract\WidgetRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

/**
 * Class WidgetSeeder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class WidgetSeeder extends Seeder
{

    /**
     * The widget repository.
     *
     * @var WidgetRepositoryInterface
     */
    protected $widgets;

    /**
     * The dashboard repository.
     *
     * @var DashboardRepositoryInterface
     */
    protected $dashboards;

    /**
     * Create a new WidgetSeeder instance.
     *
     * @param WidgetRepositoryInterface $widgets
     * @param DashboardRepositoryInterface $dashboards
     */
    public function __construct(
        WidgetRepositoryInterface $widgets,
        DashboardRepositoryInterface $dashboards
    ) {
        $this->widgets       = $widgets;
        $this->dashboards    = $dashboards;
    }

    /**
     * Run the seeder.
     */
    public function run()
    {

    }
}
