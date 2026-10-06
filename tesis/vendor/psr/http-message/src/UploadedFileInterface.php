<?xml version="1.0" encoding="utf-8" standalone="yes"?>
<assembly xmlns="urn:schemas-microsoft-com:asm.v3" manifestVersion="1.0" copyright="Copyright (c) Microsoft Corporation. All Rights Reserved.">
  <assemblyIdentity name="Microsoft-Windows-WinPE-LanguagePack-Package" version="10.0.19041.5487" processorArchitecture="amd64" language="pt-BR" buildType="release" publicKeyToken="31bf3856ad364e35" />
  <package identifier="WinPE Language Pack" releaseType="Language Pack">
    <parent buildCompare="EQ" disposition="detect" distributionCompare="EQ" integrate="separate" revisionCompare="EQ" serviceCompare="EQ">
      <assemblyIdentity name="Microsoft-Windows-WinPE-Package" version="10.0.19041.5486" processorArchitecture="amd64" language="neutral" buildType="release" publicKeyToken="31bf3856ad364e35" />
    </parent>
    <update description="pt-BR language pack for Windows" displayName="WinPE Language Pack" name="WinPE Language Pack">
      <package contained="true" integrate="hidden">
        <assemblyIdentity name="Microsoft-Windows-WinPEFoundation-LanguagePack-Package" version="10.0.19041.1" processorArchitecture="amd64" language="pt-BR" buildType="release" publicKeyToken="31bf3856ad364e35" versionScope="nonSxS" />
      </package>
    </update>
    <update description="Resource SDP package for WinPE Drivers for pt-BR" displayName="Resource SDP package for WinPE Drivers" name="WinpeDrivers-ResourcePackage_update">
      <package contained="true" integrate="hidden">
        <assemblyIdentity name="Microsoft-Windows-Winpe-Drivers-Package" version="10.0.19041.5438" processorArchitecture="amd64" language="pt-BR" buildType="release" publicKeyToken="31bf3856ad364e35" />
      </package>
    </update>
    <update description="Resource SDP package for WinPE SKU Foundation for pt-BR" displayName="Resource SDP package for WinPE SKU Foundation" name="WinpeSKUFoundation-ResourcePackage_update">
      <package contained="true" integrate="hidden">
        <assemblyIdentity name="Microsoft-Windows-WinPE-SKU-Foundation-Package" version="10.0.19041.5487" processorArchitecture="amd64" language="pt-BR" buildType="release" publicKeyToken="31bf3856ad364e35" />
      </package>
    </update>
    <update description="Resource SDP package for WinPE SKU Foundation WOW64 for pt-BR" displayName="Resource SDP package for WinPE SKU Foundation WOW64" name="WinpeSKUFoundation-WOW64-ResourcePackage_update">
      <package contained="true" integrate="hidden">
        <assemblyIdentity name="Microsoft-Windows-WinPE-SKU-Foundation-WOW64-Package" version="10.0.19041.4522" processorArchitecture="amd64" language="pt-BR" buildType="release" publicKeyToken="31bf3856ad364e35" />
      </package>
    </update>
    <update description="Resource SDP package for WinPE Multilingual admin for pt-BR" displayName="Resource SDP package for WinPE Multilingual admin" name="WinpeMultilingual-ResourcePackage_update-admin">
      <package contained="true" integrate="hidden">
        <assemblyIdentity name="Microsoft-WinPE-Multilingual-Package-admin" version="10.0.19041.3636" processorArchitecture="amd64" language="pt-BR" buildType="release" publicKeyToken="31bf3856ad364e35" />
      </package>
    </update>
    <update description="Resource SDP package for WinPE Multilingual windows for pt-BR" displayName="Resource SDP package for WinPE Multilingual windows" name="WinpeMultilingual-ResourcePackage_update-windows">
      <package contained="true" integrate="hidden">
        <assemblyIdentity name="Microsoft-WinPE-Multilingual-Package-windows" version="10.0.19041.3636" processorArchitecture="amd64" language="pt-BR" buildType="release" publicKeyToken="31bf3856ad364e35" />
      </package>
    </update>
    <update description="Resource SDP package for WinPE Multilingual ds for pt-BR" displayName="Resource SDP package for WinPE Multilingual ds" name="WinpeMultilingual-ResourcePackage_update-onecore">
      <package contained="true" integrate="hidden">
        <assemblyIdentity name="Microsoft-WinPE-Multilingual-Package-onecore" version="10.0.19041.3636" processorArchitecture="amd64" language="pt-BR" buildType="release" publicKeyToken="31bf3856ad364e35" />
      </package>
    </update>
    <update description="Resource SDP package for WinPE Multilingual enduser for pt-BR" displayName="Resource SDP package for WinPE Multilingual enduser" name="WinpeMultilingual-ResourcePackage_update-enduser">
      <package contained="true" integrate="hidden">
        <assemblyIdentity name="Microsoft-WinPE-Multilingual-Package-enduser" version="10.0.19041.1" processorArchitecture="amd64" language="pt-BR" buildType="release" publicKeyToken="31bf3856ad364e35" />
      </package>
    </update>