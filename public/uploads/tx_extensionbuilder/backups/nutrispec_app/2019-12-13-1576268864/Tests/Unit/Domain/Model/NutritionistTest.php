<?php
namespace GroupProject\NutrispecApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Kunal Harkare <kunal.harkare@hof-university.de>
 */
class NutritionistTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \GroupProject\NutrispecApp\Domain\Model\Nutritionist
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \GroupProject\NutrispecApp\Domain\Model\Nutritionist();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getQualificationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getQualification()
        );
    }

    /**
     * @test
     */
    public function setQualificationForStringSetsQualification()
    {
        $this->subject->setQualification('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'qualification',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRatingsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRatings()
        );
    }

    /**
     * @test
     */
    public function setRatingsForStringSetsRatings()
    {
        $this->subject->setRatings('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ratings',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAboutReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAbout()
        );
    }

    /**
     * @test
     */
    public function setAboutForStringSetsAbout()
    {
        $this->subject->setAbout('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'about',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getServicesReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getServices()
        );
    }

    /**
     * @test
     */
    public function setServicesForStringSetsServices()
    {
        $this->subject->setServices('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'services',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getClientsReturnsInitialValueForClients()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getClients()
        );
    }

    /**
     * @test
     */
    public function setClientsForObjectStorageContainingClientsSetsClients()
    {
        $client = new \GroupProject\NutrispecApp\Domain\Model\Clients();
        $objectStorageHoldingExactlyOneClients = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneClients->attach($client);
        $this->subject->setClients($objectStorageHoldingExactlyOneClients);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneClients,
            'clients',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addClientToObjectStorageHoldingClients()
    {
        $client = new \GroupProject\NutrispecApp\Domain\Model\Clients();
        $clientsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $clientsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($client));
        $this->inject($this->subject, 'clients', $clientsObjectStorageMock);

        $this->subject->addClient($client);
    }

    /**
     * @test
     */
    public function removeClientFromObjectStorageHoldingClients()
    {
        $client = new \GroupProject\NutrispecApp\Domain\Model\Clients();
        $clientsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $clientsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($client));
        $this->inject($this->subject, 'clients', $clientsObjectStorageMock);

        $this->subject->removeClient($client);
    }

    /**
     * @test
     */
    public function getBlogsReturnsInitialValueForBlog()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getBlogs()
        );
    }

    /**
     * @test
     */
    public function setBlogsForObjectStorageContainingBlogSetsBlogs()
    {
        $blog = new \GroupProject\NutrispecApp\Domain\Model\Blog();
        $objectStorageHoldingExactlyOneBlogs = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneBlogs->attach($blog);
        $this->subject->setBlogs($objectStorageHoldingExactlyOneBlogs);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneBlogs,
            'blogs',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addBlogToObjectStorageHoldingBlogs()
    {
        $blog = new \GroupProject\NutrispecApp\Domain\Model\Blog();
        $blogsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $blogsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($blog));
        $this->inject($this->subject, 'blogs', $blogsObjectStorageMock);

        $this->subject->addBlog($blog);
    }

    /**
     * @test
     */
    public function removeBlogFromObjectStorageHoldingBlogs()
    {
        $blog = new \GroupProject\NutrispecApp\Domain\Model\Blog();
        $blogsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $blogsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($blog));
        $this->inject($this->subject, 'blogs', $blogsObjectStorageMock);

        $this->subject->removeBlog($blog);
    }

    /**
     * @test
     */
    public function getSpecializationsReturnsInitialValueForSpecialization()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSpecializations()
        );
    }

    /**
     * @test
     */
    public function setSpecializationsForObjectStorageContainingSpecializationSetsSpecializations()
    {
        $specialization = new \GroupProject\NutrispecApp\Domain\Model\Specialization();
        $objectStorageHoldingExactlyOneSpecializations = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSpecializations->attach($specialization);
        $this->subject->setSpecializations($objectStorageHoldingExactlyOneSpecializations);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSpecializations,
            'specializations',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSpecializationToObjectStorageHoldingSpecializations()
    {
        $specialization = new \GroupProject\NutrispecApp\Domain\Model\Specialization();
        $specializationsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $specializationsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($specialization));
        $this->inject($this->subject, 'specializations', $specializationsObjectStorageMock);

        $this->subject->addSpecialization($specialization);
    }

    /**
     * @test
     */
    public function removeSpecializationFromObjectStorageHoldingSpecializations()
    {
        $specialization = new \GroupProject\NutrispecApp\Domain\Model\Specialization();
        $specializationsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $specializationsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($specialization));
        $this->inject($this->subject, 'specializations', $specializationsObjectStorageMock);

        $this->subject->removeSpecialization($specialization);
    }
}
