<?php

declare(strict_types=1);

/**
 * Base Resque Job class.
 *
 * Since PHP 8.2, creation of dynamic properties is deprecated. To avoid this, we backported abstract class
 * \Resque\Job\Job from branch development of resque/php-resque, and renamed it to Resque_AbstractJob.
 *
 * @see https://github.com/resque/php-resque/blob/develop/lib/Job/Job.php
 */
abstract class Resque_AbstractJob implements Resque_JobInterface
{
	/**
	 * Job arguments
	 * @var mixed
	 */
	public $args;

	/**
	 * Associated JobHandler instance
	 */
	public Resque_Job $job;

	/**
	 * Name of the queue the job was in
	 */
	public string $queue;

	/**
	 * (Optional) Job setup
	 *
	 * @return void
	 */
	public function setUp(): void
	{
		// no-op
	}

	/**
	 * (Optional) Job teardown
	 *
	 * @return void
	 */
	public function tearDown(): void
	{
		// no-op
	}

	/**
	 * @inheritDoc
	 */
	abstract public function perform();
}
