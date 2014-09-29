<xsl:stylesheet xmlns:xsl = "http://www.w3.org/1999/XSL/Transform" version = "1.0" >
<xsl:output method="text" media-type="text/plain" indent="yes" encoding="UTF-8" />
<xsl:template match = "/icestats" >
<pre>
<xsl:for-each select="source">
<xsl:value-of select="server_name" />,<xsl:value-of select="listeners" />,<xsl:value-of select="artist" /> <xsl:value-of select="title" />
</xsl:for-each>
</pre>
</xsl:template>
</xsl:stylesheet>!
