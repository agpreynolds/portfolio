var cv = cv || {
	init : function() {
		var self = cv;

		self.setupDom();
		self.setupEvents();
	},
	setupDom : function() {
		this.template = Handlebars.compile($('#tmpl-cv').html());	
		$('#cv').html(this.template(this.items));
		
		this.toggleLinks = $('.more');
	},
	setupEvents : function() {
		this.toggleLinks.bind('click',function(){
			$(this).next().slideToggle();
		});
	}
}

cv.items = {
	jobs : [
		{
			company: 'Webree.com',
			location: 'Portsmouth',
			jobTitle: 'Junior Developer',
			startDate: 'June 2014',
			endDate: 'Present',
			roles: [
				'Assisted development on XPOR 4, a product aiming to automate the process of developing complex functional websites.',
				'Produced detailed documentation of the companies internal networks.',
				'Performed basic hardware maintenance'

			]
		},
				{
			company: 'Estee Lauder Companies',
			location: 'Fareham',
			jobTitle: 'Undergraduate Engineer / Undergraduate Placement Student',
			startDate: 'September 2012',
			endDate: 'May 2014',
			roles: [				
				'Brand Guardian for three brands (Aveda, Labseries & Ojon) responsible for maintaining E-Commerce websites',
				'Assisted on project to build mobile optimised E-Commerce website for Ojon',
				'Assisted on project to integrate a single page checkout system for 4 brand websites',
				'Managing support mailbox for E-Commerce websites',
				'Liaising with finance and customer service teams to resolve issues with online orders'
			],
			training: [
				{
					name: 'Introduction to Perl Programming',
					provider: 'Learning Tree International'
				}
			]
		}
	],
	education: [
		{
			institution: 'University of Portsmouth',
			qualification: 'Bsc (Hons) Web Technologies',
			startDate: 'September 2010',
			endDate: 'May 2014',
			results: [
				{
					name: 'Final Year',
					items: [
						{
							name: 'Web Research',
							grade: '80%'
						},
						{
							name: 'Enterprise Web Architectures',
							grade: '77%'
						},
						{
							name: 'Data Warehousing and Mining',
							grade: '76%'
						},
						{
							name: 'Final Year Project',
							grade: '70%'
						},
						{
							name: 'Applied Computer Graphics and Vision',
							grade: '67%'
						}
					]
				},
				{
					name: 'Second Year',
					items: [
						{
							name: 'Intermediate Systems Analysis and Design',
							grade: '96%'
						},
						{
							name: 'Web Client and Server Programming',
							grade: '91%'
						},
						{
							name: 'Work and the Information Society',
							grade: '88%'
						},
						{
							name: 'Industrialisation and Society',
							grade: '86%'
						},
						{
							name: 'Databases',
							grade: '83%'
						},
						{
							name: 'E-Commerce Infrastructure and Technologies',
							grade: '82%'
						},
						{
							name: 'Research Methods',
							grade: '70%'
						},
						{
							name: 'Project Management Techniques for Information Systems',
							grade: '65%'
						},
						{
							name: 'Knowledge Management Concepts',
							grade: '61%'
						}
					]
				},
				{
					name: 'First Year',
					items: [
						{
							name: 'Developing Information Systems',
							grade: '77%'
						},
						{
							name: 'Social Aspects of Computing',
							grade: '77%'
						},
						{
							name: 'Origins of Computing',
							grade: '77%'
						},
						{
							name: 'Industrialisation and Society',
							grade: '86%'
						},
						{
							name: 'Introduction to Business Law',
							grade: '71%'
						},
						{
							name: 'Introduction to Data Communication',
							grade: '70%'
						},
						{
							name: 'JavaScript Programming',
							grade: '65%'
						},
						{
							name: 'PC Systems and Management',
							grade: '64%'
						},
						{
							name: 'Web Authoring and Design',
							grade: '62%'
						},
						{
							name: 'Professional and Higher Eduction Studies',
							grade: '62%'
						}
					]
				}
			]
		},
		{
			institution: 'Collingwood College',
			qualification: '',
			startDate: 'September 2003',
			endDate: 'July 2010',
			results: [
				{
					name: 'A Levels',
					items: [
						{
							name: 'Applied ICT',
							grade: 'A'
						},
						{
							name: 'Business Studies',
							grade: 'B'
						},
						{
							name: 'Maths',
							grade: 'C'
						}
					]
				},
				{
					name: 'AS Levels',
					items: [
						{
							name: 'Computing',
							grade: 'B'
						}
					]
				},
				{
					name: 'GCSE\'s',
					items: [
						{
							name: 'Science',
							grade: 'A*'
						},
						{
							name: 'Maths',
							grade: 'A'
						},
						{
							name: 'Business Studies',
							grade: 'A'
						},
						{
							name: 'Religious Studies',
							grade: 'A'
						},
						{
							name: 'Geography',
							grade: 'B'
						},
						{
							name: 'English Language',
							grade: 'B'
						},
						{
							name: 'English Literature',
							grade: 'B'
						},
						{
							name: 'Food Technology',
							grade: 'B'
						},
						{
							name: 'ECDL ICT Double Award',
							grade: ''
						}
					]
				}
			]
		}
	]
}

$(document).ready(cv.init);