<?php declare(strict_types = 1);

namespace PHPStan\Rules\Symfony;

use Symfony\Contracts\Service\ServiceSubscriberInterface;

final class ExampleServiceSubscriber implements ServiceSubscriberInterface
{

	public function privateService(): void
	{
		$this->get('private');
	}

	/**
	 * @return string[]
	 */
	public static function getSubscribedServices(): array
	{
		return [];
	}

}
