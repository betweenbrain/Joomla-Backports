Joomla Backports
================

A Joomla 1.5 plugin for backporting more recent Joomla goodness.

Using It
========
Since it is a system plugin, that registers classes in the __construct method, they will be immediately availbe for use.

For example, you can access the JDatabaseQuery method as follows to format your queries:

```
$db = JFactory::getDbo();
$query = new JDatabaseQuery();
$query
	->select($db->nameQuote('title'))
	->from($db->nameQuote('#__content'))
	->where($db->nameQuote('id') . '= ' . $db->Quote('1'));
$db->setQuery($query);
$result = $db->loadResult();
```
