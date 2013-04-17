<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 cc=76; */

/**
 * Fixture generator for "Record Loading" Jasmine suite.
 *
 * @package     omeka
 * @subpackage  neatline
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

class FixturesTest_RecordLoading extends Neatline_RecordsFixtureCase
{


    /**
     * `RecordLoading.records.regular.json`
     */
    public function testRegular()
    {

        $record1 = $this->__record($this->exhibit);
        $record2 = $this->__record($this->exhibit);
        $record3 = $this->__record($this->exhibit);
        $record1->title = 'title1';
        $record2->title = 'title2';
        $record3->title = 'title3';
        $record1->added = '2003-01-01';
        $record2->added = '2002-01-01';
        $record3->added = '2001-01-01';

        $record1->save();
        $record2->save();
        $record3->save();

        $this->writeFixtureFromRoute('neatline/records',
            'RecordLoading.records.regular.json'
        );

    }


    /**
     * `RecordLoading.records.empty.json`
     */
    public function testEmptyTitle()
    {

        $record = $this->__record($this->exhibit);

        $this->writeFixtureFromRoute('neatline/records',
            'RecordLoading.records.empty.json'
        );

    }


}
