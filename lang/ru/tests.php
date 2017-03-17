<?php
return array(
    'run' => array(
        'name' => '������� �������. ����������� ������������',
        'report' => array(
            'completed' => '������� ��������',
            'assertions' => '��������'
        )
    ),
    'cases' => array(
        \WS\Tools\Tests\Cases\CacheTestCase::className() => array(
            'name' => '���������� �����������',
            'description' => '',
            'errors' => array(
                'cache must be not expire' => '��� ������ ���� �� ��������',
                'cache must be not empty' => '��� ������ ���� �� ������',
                'bad stored data' => '�������� ���������� �� �����',
                'cache must be expire' => '��� ������ ���� ��������',
                'data must be empty' => '������ �� ������ ���� �������',
                'string not equals expected' => '������ �������� �� ������������� ���������',
            )
        ),
        \WS\Tools\Tests\Cases\EventManagerTestCase::className() => array(
            'name' => '���������� ��������� �������',
            'description' => '',
            'errors' => array(
                'cache must be not expire' => '��� ������ ���� �� ��������'
            )
        ),
        \WS\Tools\Tests\Cases\AgentRunTestCase::className() => array(
            'name' => '���������� ������ � ��������',
            'description' => '',
            'errors' => array(
                'cache must be not expire' => '��� ������ ���� �� ��������'
            )
        ),
    )
);