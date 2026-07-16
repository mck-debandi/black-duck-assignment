<?php
function blackducktheme_get_assets() {

	return [
		[
            'title' => 'Secure Your Software Supply Chain',
            'description' => 'The software supply chain includes everything that touches an application or plays a role in its assembly, development, or deployment. ... Every component, person, activity, material, and procedure.',
            'link' => 'https://www.blackduck.com/resources/ebooks/securing-software-supply-chain.html',
            'image' => get_template_directory_uri() . '/assets/images/rubber-duckies-in-gutter.jpg',
            'categories' => [
                'eBook',
                'Guide'
            ],
            'tags' => [
                'Black Duck SCA',
                'M&A Due Diligence',
                'SCA'
            ]
        ],
        [
            'title' => 'Leveraging AI to Accelerate AppSec Vulnerability Remediation',
            'description' => 'AI is reshaping AppSec at an unprecedented pace, fundamentally changing how vulnerabilities are discovered and addressed. ... Advances in large language models have made it possible to analyze enti...',
            'link' => 'https://www.blackduck.com/resources/ebooks/ai-accelerate-appsec-vulnerability-remediation.html',
            'image' => get_template_directory_uri() . '/assets/images/ducks-at-lake.jpg',
            'categories' => [
                'eBook',
                'Guide'
            ],
            'tags' => [
                'Polaris',
                'AI & Machine Learning',
                'AppSec Risk Management'
            ]
        ],
        [
            'title' => 'Build and Maintain Actionable SBOMs',
            'description' => 'Software is constantly changing. ... Patches. ... Without a complete, dynamic view of what\'s in your applications, you can\'t know what risks you\'re exposed to. ... A Software Bill of Materials (SBO...',
            'link' => 'https://www.blackduck.com/resources/ebooks/actionable-software-bill-of-materials.html',
            'image' => get_template_directory_uri() . '/assets/images/duck-yellow-eyes.jpg',
            'categories' => [
                'eBook'
            ],
            'tags' => [
                'Black Duck SCA',
                'SCA',
                'Software Supply Chain Security'
            ]
        ]
	];

}
