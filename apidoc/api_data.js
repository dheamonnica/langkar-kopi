define({ "api": [{
    "type": "post",
    "url": "/blog/add",
    "title": "Add Blog.",
    "version": "0.1.0",
    "name": "Addblog",
    "group": "blog",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Api-Key",
            "description": "<p>Blog unique access-key.</p>"
          }
          ,
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Blog unique token.</p>"
          }
                  ]
      }
    },
    "permission": [
      {
        "name": "Blog Cant be Accessed permission name : api_blog_add"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
                    {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Slug",
            "description": "<p>Mandatory slug of Blogs Input Slug Max Length : 200..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Content",
            "description": "<p>Mandatory content of Blogs .</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Title",
            "description": "<p>Mandatory title of Blogs Input Title Max Length : 255..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Image",
            "description": "<p>Mandatory image of Blogs .</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Category",
            "description": "<p>Mandatory category of Blogs Input Category Max Length : 200..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Tags",
            "description": "<p>Mandatory tags of Blogs .</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Status",
            "description": "<p>Mandatory status of Blogs Input Status Max Length : 10..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Author",
            "description": "<p>Mandatory author of Blogs Input Author Max Length : 100..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Viewers",
            "description": "<p>Mandatory viewers of Blogs Input Viewers Max Length : 11..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Created_at",
            "description": "<p>Mandatory created_at of Blogs .</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Updated_at",
            "description": "<p>Mandatory updated_at of Blogs .</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "ValidationError",
            "description": "<p>Error validation.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Blog.php",
    "groupTitle": "Blog"
  },
  {
    "type": "get",
    "url": "/blog/all",
    "title": "Get all Blogs.",
    "version": "0.1.0",
    "name": "Allblog",
    "group": "blog",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Api-Key",
            "description": "<p>Blogs unique access-key.</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Blogs unique token.</p>"
          }
        ]
      }
    },
    "permission": [
      {
        "name": "{} Cant be Accessed permission name : api_Blog_all"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
         
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "Field",
            "defaultValue": "All Field",
            "description": "<p>Optional field of Blogs.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "Start",
            "defaultValue": "0",
            "description": "<p>Optional start index of Blogs.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "Limit",
            "defaultValue": "10",
            "description": "<p>Optional limit data of Blogs.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "Data",
            "description": "<p>data of Blog.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "NoDataBlog",
            "description": "<p>Blog data is nothing.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Blog.php",
    "groupTitle": "Blog"
  },
  {
    "type": "post",
    "url": "/Blog/delete",
    "title": "Delete Blog.",
    "version": "0.1.0",
    "name": "Deleteblog",
    "group": "blog",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Api-Key",
            "description": "<p>Blogs unique access-key.</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Blogs unique token.</p>"
          }
        ]
      }
    },
    "permission": [
      {
        "name": "Blog Cant be Accessed permission name : api_Blog_delete"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": false,
            "field": "Id",
            "description": "<p>Mandatory id of Blogs .</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "ValidationError",
            "description": "<p>Error validation.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Blog.php",
    "groupTitle": "Blog"
  },
  {
    "type": "get",
    "url": "/Blog/detail",
    "title": "Detail Blog.",
    "version": "0.1.0",
    "name": "Detailblog",
    "group": "blog",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Api-Key",
            "description": "<p>Blogs unique access-key.</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Blogs unique token.</p>"
          }
        ]
      }
    },
    "permission": [
      {
        "name": "Blog Cant be Accessed permission name : api_Blog_detail"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": false,
            "field": "Id",
            "description": "<p>Mandatory id of Blogs.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "Data",
            "description": "<p>data of Blog.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BlogNotFound",
            "description": "<p>Blog data is not found.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Blog.php",
    "groupTitle": "Blog"
  },
  {
    "type": "post",
    "url": "/Blog/update",
    "title": "Update Blog.",
    "version": "0.1.0",
    "name": "Updateblog",
    "group": "blog",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Api-Key",
            "description": "<p>Blogs unique access-key.</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Blogs unique token.</p>"
          }
        ]
      }
    },
    "permission": [
      {
        "name": "Blog Cant be Accessed permission name : api_Blog_update"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
                    {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Slug",
            "description": "<p>Mandatory slug of Blogs Input Slug Max Length : 200..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Content",
            "description": "<p>Mandatory content of Blogs .</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Title",
            "description": "<p>Mandatory title of Blogs Input Title Max Length : 255..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Image",
            "description": "<p>Mandatory image of Blogs .</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Category",
            "description": "<p>Mandatory category of Blogs Input Category Max Length : 200..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Tags",
            "description": "<p>Mandatory tags of Blogs .</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Status",
            "description": "<p>Mandatory status of Blogs Input Status Max Length : 10..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Author",
            "description": "<p>Mandatory author of Blogs Input Author Max Length : 100..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Viewers",
            "description": "<p>Mandatory viewers of Blogs Input Viewers Max Length : 11..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Created_at",
            "description": "<p>Mandatory created_at of Blogs .</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Updated_at",
            "description": "<p>Mandatory updated_at of Blogs .</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "ValidationError",
            "description": "<p>Error validation.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Blog.php",
    "groupTitle": "Blog"
  },{
    "type": "post",
    "url": "/blog_category/add",
    "title": "Add Blog category.",
    "version": "0.1.0",
    "name": "Addblog_category",
    "group": "blog_category",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Api-Key",
            "description": "<p>Blog category unique access-key.</p>"
          }
          ,
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Blog category unique token.</p>"
          }
                  ]
      }
    },
    "permission": [
      {
        "name": "Blog category Cant be Accessed permission name : api_blog_category_add"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
                    {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Category_name",
            "description": "<p>Mandatory category_name of Blog categorys Input Category Name Max Length : 200..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Category_desc",
            "description": "<p>Mandatory category_desc of Blog categorys .</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "ValidationError",
            "description": "<p>Error validation.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Blog_category.php",
    "groupTitle": "Blog category"
  },
  {
    "type": "get",
    "url": "/blog_category/all",
    "title": "Get all Blog categorys.",
    "version": "0.1.0",
    "name": "Allblog_category",
    "group": "blog_category",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Api-Key",
            "description": "<p>Blog categorys unique access-key.</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Blog categorys unique token.</p>"
          }
        ]
      }
    },
    "permission": [
      {
        "name": "{} Cant be Accessed permission name : api_Blog category_all"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
         
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "Field",
            "defaultValue": "All Field",
            "description": "<p>Optional field of Blog categorys.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "Start",
            "defaultValue": "0",
            "description": "<p>Optional start index of Blog categorys.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "Limit",
            "defaultValue": "10",
            "description": "<p>Optional limit data of Blog categorys.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "Data",
            "description": "<p>data of Blog category.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "NoDataBlog category",
            "description": "<p>Blog category data is nothing.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Blog category.php",
    "groupTitle": "Blog category"
  },
  {
    "type": "post",
    "url": "/Blog category/delete",
    "title": "Delete Blog category.",
    "version": "0.1.0",
    "name": "Deleteblog_category",
    "group": "blog_category",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Api-Key",
            "description": "<p>Blog categorys unique access-key.</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Blog categorys unique token.</p>"
          }
        ]
      }
    },
    "permission": [
      {
        "name": "Blog category Cant be Accessed permission name : api_Blog category_delete"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": false,
            "field": "Id",
            "description": "<p>Mandatory id of Blog categorys .</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "ValidationError",
            "description": "<p>Error validation.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Blog category.php",
    "groupTitle": "Blog category"
  },
  {
    "type": "get",
    "url": "/Blog category/detail",
    "title": "Detail Blog category.",
    "version": "0.1.0",
    "name": "Detailblog_category",
    "group": "blog_category",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Api-Key",
            "description": "<p>Blog categorys unique access-key.</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Blog categorys unique token.</p>"
          }
        ]
      }
    },
    "permission": [
      {
        "name": "Blog category Cant be Accessed permission name : api_Blog category_detail"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": false,
            "field": "Id",
            "description": "<p>Mandatory id of Blog categorys.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "Data",
            "description": "<p>data of Blog category.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "Blog categoryNotFound",
            "description": "<p>Blog category data is not found.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Blog category.php",
    "groupTitle": "Blog category"
  },
  {
    "type": "post",
    "url": "/Blog category/update",
    "title": "Update Blog category.",
    "version": "0.1.0",
    "name": "Updateblog_category",
    "group": "blog_category",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Api-Key",
            "description": "<p>Blog categorys unique access-key.</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Blog categorys unique token.</p>"
          }
        ]
      }
    },
    "permission": [
      {
        "name": "Blog category Cant be Accessed permission name : api_Blog category_update"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
                    {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Category_name",
            "description": "<p>Mandatory category_name of Blog categorys Input Category Name Max Length : 200..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Category_desc",
            "description": "<p>Mandatory category_desc of Blog categorys .</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "ValidationError",
            "description": "<p>Error validation.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Blog category.php",
    "groupTitle": "Blog category"
  }, {
    "type": "post",
    "url": "/group/add",
    "title": "Add Group.",
    "version": "0.1.0",
    "name": "AddGroup",
    "group": "Group",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-API-KEY",
            "description": "<p>Groups unique access-key.</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Groups unique token.</p>"
          }
        ]
      }
    },
    "permission": [
      {
        "name": "Group Cant be Accessed permission name : api_group_add"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Name",
            "description": "<p>Mandatory name of Groups.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "Definition",
            "description": "<p>Optional definition of Groups.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "ValidationError",
            "description": "<p>Error validation.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Group.php",
    "groupTitle": "Group"
  },
  {
    "type": "get",
    "url": "/group/all",
    "title": "Get all groups.",
    "version": "0.1.0",
    "name": "AllGroup",
    "group": "Group",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-API-KEY",
            "description": "<p>Groups unique access-key.</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Groups unique token.</p>"
          }
        ]
      }
    },
    "permission": [
      {
        "name": "Group Cant be Accessed permission name : api_group_all"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "Filter",
            "defaultValue": "null",
            "description": "<p>Optional filter of Groups.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "Field",
            "defaultValue": "All Field",
            "description": "<p>Optional field of Groups.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "Start",
            "defaultValue": "0",
            "description": "<p>Optional start index of Groups.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "Limit",
            "defaultValue": "10",
            "description": "<p>Optional limit data of Groups.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "Data",
            "description": "<p>data of group.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "NoDataGroup",
            "description": "<p>Group data is nothing.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Group.php",
    "groupTitle": "Group"
  },
  {
    "type": "post",
    "url": "/group/delete",
    "title": "Delete Group.",
    "version": "0.1.0",
    "name": "DeleteGroup",
    "group": "Group",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-API-KEY",
            "description": "<p>Groups unique access-key.</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Groups unique token.</p>"
          }
        ]
      }
    },
    "permission": [
      {
        "name": "Group Cant be Accessed permission name : api_group_delete"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": false,
            "field": "Id",
            "description": "<p>Mandatory id of Groups .</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "ValidationError",
            "description": "<p>Error validation.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Group.php",
    "groupTitle": "Group"
  },
  {
    "type": "get",
    "url": "/group/detail",
    "title": "Detail Group.",
    "version": "0.1.0",
    "name": "DetailGroup",
    "group": "Group",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-API-KEY",
            "description": "<p>Groups unique access-key.</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Groups unique token.</p>"
          }
        ]
      }
    },
    "permission": [
      {
        "name": "Group Cant be Accessed permission name : api_group_detail"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": false,
            "field": "Id",
            "description": "<p>Mandatory id of Groups.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "Data",
            "description": "<p>data of group.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "GroupNotFound",
            "description": "<p>Group data is not found.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Group.php",
    "groupTitle": "Group"
  },
  {
    "type": "post",
    "url": "/group/update",
    "title": "Update Group.",
    "version": "0.1.0",
    "name": "UpdateGroup",
    "group": "Group",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-API-KEY",
            "description": "<p>Groups unique access-key.</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Groups unique token.</p>"
          }
        ]
      }
    },
    "permission": [
      {
        "name": "Group Cant be Accessed permission name : api_group_update"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Name",
            "description": "<p>Mandatory Name of Groups.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "Definition",
            "description": "<p>Optional definition of Groups.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "ValidationError",
            "description": "<p>Error validation.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Group.php",
    "groupTitle": "Group"
  },{
  "type": "post",
  "url": "/user/add",
  "title": "Add User.",
  "version": "0.1.0",
  "name": "AddUser",
  "group": "User",
  "header": {
    "fields": {
      "Header": [
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-API-KEY",
          "description": "<p>Users unique access-key.</p>"
        },
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-Token",
          "description": "<p>Users unique token.</p>"
        }
      ]
    }
  },
  "permission": [
    {
      "name": "Group Cant be Accessed permission name : api_user_add"
    }
  ],
  "parameter": {
    "fields": {
      "Parameter": [
        {
          "group": "Parameter",
          "type": "String",
          "optional": false,
          "field": "Username",
          "description": "<p>Mandatory username of Users.</p>"
        },
        {
          "group": "Parameter",
          "type": "String",
          "optional": false,
          "field": "Email",
          "description": "<p>Mandatory email of Users.</p>"
        },
        {
          "group": "Parameter",
          "type": "String",
          "optional": false,
          "field": "Password",
          "description": "<p>password of Users.</p>"
        },
        {
          "group": "Parameter",
          "type": "Array",
          "optional": true,
          "field": "Group",
          "defaultValue": "Default",
          "description": "<p>Optional group of Users.</p>"
        },
        {
          "group": "Parameter",
          "type": "File",
          "optional": true,
          "field": "Avatar",
          "defaultValue": "Default.PNG",
          "description": "<p>Optional avatar of Users.</p>"
        }
      ]
    }
  },
  "success": {
    "fields": {
      "Success 200": [
        {
          "group": "Success 200",
          "type": "Boolean",
          "optional": false,
          "field": "Status",
          "description": "<p>status response api.</p>"
        },
        {
          "group": "Success 200",
          "type": "String",
          "optional": false,
          "field": "Message",
          "description": "<p>message response api.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Success-Response:",
        "content": "HTTP/1.1 200 OK",
        "type": "json"
      }
    ]
  },
  "error": {
    "fields": {
      "Error 4xx": [
        {
          "group": "Error 4xx",
          "optional": false,
          "field": "ValidationError",
          "description": "<p>Error validation.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Error-Response:",
        "content": "HTTP/1.1 403 Not Acceptable",
        "type": "json"
      }
    ]
  },
  "filename": "application/controllers/api/User.php",
  "groupTitle": "User"
},
{
  "type": "get",
  "url": "/user/all",
  "title": "Get all users.",
  "version": "0.1.0",
  "name": "AllUser",
  "group": "User",
  "header": {
    "fields": {
      "Header": [
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-API-KEY",
          "description": "<p>Users unique access-key.</p>"
        },
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-Token",
          "description": "<p>Users unique token.</p>"
        }
      ]
    }
  },
  "permission": [
    {
      "name": "Group Cant be Accessed permission name : api_user_all"
    }
  ],
  "parameter": {
    "fields": {
      "Parameter": [
        {
          "group": "Parameter",
          "type": "String",
          "optional": true,
          "field": "Filter",
          "defaultValue": "null",
          "description": "<p>Optional filter of Users.</p>"
        },
        {
          "group": "Parameter",
          "type": "String",
          "optional": true,
          "field": "Field",
          "defaultValue": "All Field",
          "description": "<p>Optional field of Users.</p>"
        },
        {
          "group": "Parameter",
          "type": "String",
          "optional": true,
          "field": "Start",
          "defaultValue": "0",
          "description": "<p>Optional start index of Users.</p>"
        },
        {
          "group": "Parameter",
          "type": "String",
          "optional": true,
          "field": "Limit",
          "defaultValue": "10",
          "description": "<p>Optional limit data of Users.</p>"
        }
      ]
    }
  },
  "success": {
    "fields": {
      "Success 200": [
        {
          "group": "Success 200",
          "type": "Boolean",
          "optional": false,
          "field": "Status",
          "description": "<p>status response api.</p>"
        },
        {
          "group": "Success 200",
          "type": "String",
          "optional": false,
          "field": "Message",
          "description": "<p>message response api.</p>"
        },
        {
          "group": "Success 200",
          "type": "Array",
          "optional": false,
          "field": "Data",
          "description": "<p>data of user.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Success-Response:",
        "content": "HTTP/1.1 200 OK",
        "type": "json"
      }
    ]
  },
  "error": {
    "fields": {
      "Error 4xx": [
        {
          "group": "Error 4xx",
          "optional": false,
          "field": "NoDataUser",
          "description": "<p>User data is nothing.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Error-Response:",
        "content": "HTTP/1.1 403 Not Acceptable",
        "type": "json"
      }
    ]
  },
  "filename": "application/controllers/api/User.php",
  "groupTitle": "User"
},
{
  "type": "post",
  "url": "/user/delete",
  "title": "Delete User.",
  "version": "0.1.0",
  "name": "DeleteUser",
  "group": "User",
  "header": {
    "fields": {
      "Header": [
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-API-KEY",
          "description": "<p>Users unique access-key.</p>"
        },
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-Token",
          "description": "<p>Users unique token.</p>"
        }
      ]
    }
  },
  "permission": [
    {
      "name": "Group Cant be Accessed permission name : api_user_delete"
    }
  ],
  "parameter": {
    "fields": {
      "Parameter": [
        {
          "group": "Parameter",
          "type": "Integer",
          "optional": false,
          "field": "Id",
          "description": "<p>mandatory id of Users .</p>"
        }
      ]
    }
  },
  "success": {
    "fields": {
      "Success 200": [
        {
          "group": "Success 200",
          "type": "Boolean",
          "optional": false,
          "field": "Status",
          "description": "<p>status response api.</p>"
        },
        {
          "group": "Success 200",
          "type": "String",
          "optional": false,
          "field": "Message",
          "description": "<p>message response api.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Success-Response:",
        "content": "HTTP/1.1 200 OK",
        "type": "json"
      }
    ]
  },
  "error": {
    "fields": {
      "Error 4xx": [
        {
          "group": "Error 4xx",
          "optional": false,
          "field": "ValidationError",
          "description": "<p>Error validation.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Error-Response:",
        "content": "HTTP/1.1 403 Not Acceptable",
        "type": "json"
      }
    ]
  },
  "filename": "application/controllers/api/User.php",
  "groupTitle": "User"
},
{
  "type": "get",
  "url": "/user/detail",
  "title": "Detail User.",
  "version": "0.1.0",
  "name": "DetailUser",
  "group": "User",
  "header": {
    "fields": {
      "Header": [
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-API-KEY",
          "description": "<p>Users unique access-key.</p>"
        },
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-Token",
          "description": "<p>Users unique token.</p>"
        }
      ]
    }
  },
  "permission": [
    {
      "name": "Group Cant be Accessed permission name : api_user_detail"
    }
  ],
  "parameter": {
    "fields": {
      "Parameter": [
        {
          "group": "Parameter",
          "type": "Integer",
          "optional": false,
          "field": "Id",
          "description": "<p>Mandatory id of Users.</p>"
        }
      ]
    }
  },
  "success": {
    "fields": {
      "Success 200": [
        {
          "group": "Success 200",
          "type": "Boolean",
          "optional": false,
          "field": "Status",
          "description": "<p>status response api.</p>"
        },
        {
          "group": "Success 200",
          "type": "String",
          "optional": false,
          "field": "Message",
          "description": "<p>message response api.</p>"
        },
        {
          "group": "Success 200",
          "type": "Array",
          "optional": false,
          "field": "Data",
          "description": "<p>data of user.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Success-Response:",
        "content": "HTTP/1.1 200 OK",
        "type": "json"
      }
    ]
  },
  "error": {
    "fields": {
      "Error 4xx": [
        {
          "group": "Error 4xx",
          "optional": false,
          "field": "UserNotFound",
          "description": "<p>User data is not found.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Error-Response:",
        "content": "HTTP/1.1 403 Not Acceptable",
        "type": "json"
      }
    ]
  },
  "filename": "application/controllers/api/User.php",
  "groupTitle": "User"
},
{
  "type": "post",
  "url": "/user/login",
  "title": "User login authentication.",
  "version": "0.1.0",
  "name": "LoginUser",
  "group": "User",
  "header": {
    "fields": {
      "Header": [
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-API-KEY",
          "description": "<p>Users unique access-key.</p>"
        }
      ]
    }
  },
  "permission": [
    {
      "name": "none"
    }
  ],
  "parameter": {
    "fields": {
      "Parameter": [
        {
          "group": "Parameter",
          "type": "String",
          "optional": false,
          "field": "Username",
          "description": "<p>Mandatory username of Users.</p>"
        },
        {
          "group": "Parameter",
          "type": "String",
          "optional": false,
          "field": "Password",
          "description": "<p>Mandatory password of Users.</p>"
        }
      ]
    }
  },
  "success": {
    "fields": {
      "Success 200": [
        {
          "group": "Success 200",
          "type": "Boolean",
          "optional": false,
          "field": "Status",
          "description": "<p>status response api.</p>"
        },
        {
          "group": "Success 200",
          "type": "String",
          "optional": false,
          "field": "Message",
          "description": "<p>message response api.</p>"
        },
        {
          "group": "Success 200",
          "type": "Array",
          "optional": false,
          "field": "Data",
          "description": "<p>data of user.</p>"
        },
        {
          "group": "Success 200",
          "type": "String",
          "optional": false,
          "field": "Token",
          "description": "<p>token for access api.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Success-Response:",
        "content": "HTTP/1.1 200 OK",
        "type": "json"
      }
    ]
  },
  "error": {
    "fields": {
      "Error 4xx": [
        {
          "group": "Error 4xx",
          "optional": false,
          "field": "InvalidCredential",
          "description": "<p>The username or password is invalid.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Error-Response:",
        "content": "HTTP/1.1 403 Not Acceptable",
        "type": "json"
      }
    ]
  },
  "filename": "application/controllers/api/User.php",
  "groupTitle": "User"
},
{
  "type": "post",
  "url": "/user/request_token",
  "title": "User request token.",
  "version": "0.1.0",
  "name": "RequestTokenUser",
  "group": "User",
  "header": {
    "fields": {
      "Header": [
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-API-KEY",
          "description": "<p>Users unique access-key.</p>"
        }
      ]
    }
  },
  "permission": [
    {
      "name": "none"
    }
  ],
  "parameter": {
    "fields": {
      "Parameter": [
        {
          "group": "Parameter",
          "type": "String",
          "optional": false,
          "field": "Username",
          "description": "<p>Mandatory username of Users.</p>"
        },
        {
          "group": "Parameter",
          "type": "String",
          "optional": false,
          "field": "Password",
          "description": "<p>Mandatory password of Users.</p>"
        }
      ]
    }
  },
  "success": {
    "fields": {
      "Success 200": [
        {
          "group": "Success 200",
          "type": "String",
          "optional": false,
          "field": "Token",
          "description": "<p>token for access api.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Success-Response:",
        "content": "HTTP/1.1 200 OK",
        "type": "json"
      }
    ]
  },
  "error": {
    "fields": {
      "Error 4xx": [
        {
          "group": "Error 4xx",
          "optional": false,
          "field": "InvalidCredential",
          "description": "<p>The username or password is invalid.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Error-Response:",
        "content": "HTTP/1.1 403 Not Acceptable",
        "type": "json"
      }
    ]
  },
  "filename": "application/controllers/api/User.php",
  "groupTitle": "User"
},
{
  "type": "get",
  "url": "/user/profile",
  "title": "Profile User.",
  "version": "0.1.0",
  "name": "ProfileUser",
  "group": "User",
  "header": {
    "fields": {
      "Header": [
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-API-KEY",
          "description": "<p>Users unique access-key.</p>"
        },
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-Token",
          "description": "<p>Users unique token.</p>"
        }
      ]
    }
  },
  "permission": [
    {
      "name": "Group Cant be Accessed permission name : api_user_profile"
    }
  ],
  "success": {
    "fields": {
      "Success 200": [
        {
          "group": "Success 200",
          "type": "Boolean",
          "optional": false,
          "field": "Status",
          "description": "<p>status response api.</p>"
        },
        {
          "group": "Success 200",
          "type": "String",
          "optional": false,
          "field": "Message",
          "description": "<p>message response api.</p>"
        },
        {
          "group": "Success 200",
          "type": "Array",
          "optional": false,
          "field": "Data",
          "description": "<p>data of user.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Success-Response:",
        "content": "HTTP/1.1 200 OK",
        "type": "json"
      }
    ]
  },
  "error": {
    "fields": {
      "Error 4xx": [
        {
          "group": "Error 4xx",
          "optional": false,
          "field": "UserNotFound",
          "description": "<p>User data is not found.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Error-Response:",
        "content": "HTTP/1.1 403 Not Acceptable",
        "type": "json"
      }
    ]
  },
  "filename": "application/controllers/api/User.php",
  "groupTitle": "User"
},
{
  "type": "post",
  "url": "/user/update_profile",
  "title": "Update Profile User.",
  "version": "0.1.0",
  "name": "UpdateProfileUser",
  "group": "User",
  "header": {
    "fields": {
      "Header": [
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-API-KEY",
          "description": "<p>Users unique access-key.</p>"
        },
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-Token",
          "description": "<p>Users unique token.</p>"
        }
      ]
    }
  },
  "permission": [
    {
      "name": "Group Cant be Accessed permission name : api_user_update"
    }
  ],
  "parameter": {
    "fields": {
      "Parameter": [
        {
          "group": "Parameter",
          "type": "String",
          "optional": false,
          "field": "Email",
          "description": "<p>Mandatory email of Users.</p>"
        },
        {
          "group": "Parameter",
          "type": "String",
          "optional": false,
          "field": "Password",
          "description": "<p>password of Users.</p>"
        },
        {
          "group": "Parameter",
          "type": "File",
          "optional": true,
          "field": "Avatar",
          "defaultValue": "Default.PNG",
          "description": "<p>Optional avatar of Users.</p>"
        }
      ]
    }
  },
  "success": {
    "fields": {
      "Success 200": [
        {
          "group": "Success 200",
          "type": "Boolean",
          "optional": false,
          "field": "Status",
          "description": "<p>status response api.</p>"
        },
        {
          "group": "Success 200",
          "type": "String",
          "optional": false,
          "field": "Message",
          "description": "<p>message response api.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Success-Response:",
        "content": "HTTP/1.1 200 OK",
        "type": "json"
      }
    ]
  },
  "error": {
    "fields": {
      "Error 4xx": [
        {
          "group": "Error 4xx",
          "optional": false,
          "field": "ValidationError",
          "description": "<p>Error validation.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Error-Response:",
        "content": "HTTP/1.1 403 Not Acceptable",
        "type": "json"
      }
    ]
  },
  "filename": "application/controllers/api/User.php",
  "groupTitle": "User"
},
{
  "type": "post",
  "url": "/user/update",
  "title": "Update User.",
  "version": "0.1.0",
  "name": "UpdateUser",
  "group": "User",
  "header": {
    "fields": {
      "Header": [
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-API-KEY",
          "description": "<p>Users unique access-key.</p>"
        },
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-Token",
          "description": "<p>Users unique token.</p>"
        }
      ]
    }
  },
  "permission": [
    {
      "name": "Group Cant be Accessed permission name : api_user_update"
    }
  ],
  "parameter": {
    "fields": {
      "Parameter": [
        {
          "group": "Parameter",
          "type": "String",
          "optional": false,
          "field": "Email",
          "description": "<p>Mandatory email of Users.</p>"
        },
        {
          "group": "Parameter",
          "type": "String",
          "optional": false,
          "field": "Password",
          "description": "<p>password of Users.</p>"
        },
        {
          "group": "Parameter",
          "type": "Array",
          "optional": true,
          "field": "Group",
          "defaultValue": "Default",
          "description": "<p>Optional group of Users.</p>"
        },
        {
          "group": "Parameter",
          "type": "File",
          "optional": true,
          "field": "Avatar",
          "defaultValue": "Default.PNG",
          "description": "<p>Optional avatar of Users.</p>"
        },
        {
          "group": "Parameter",
          "type": "Integer",
          "optional": false,
          "field": "Id",
          "description": "<p>Mandatory id of Users.</p>"
        }
      ]
    }
  },
  "success": {
    "fields": {
      "Success 200": [
        {
          "group": "Success 200",
          "type": "Boolean",
          "optional": false,
          "field": "Status",
          "description": "<p>status response api.</p>"
        },
        {
          "group": "Success 200",
          "type": "String",
          "optional": false,
          "field": "Message",
          "description": "<p>message response api.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Success-Response:",
        "content": "HTTP/1.1 200 OK",
        "type": "json"
      }
    ]
  },
  "error": {
    "fields": {
      "Error 4xx": [
        {
          "group": "Error 4xx",
          "optional": false,
          "field": "ValidationError",
          "description": "<p>Error validation.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Error-Response:",
        "content": "HTTP/1.1 403 Not Acceptable",
        "type": "json"
      }
    ]
  },
  "filename": "application/controllers/api/User.php",
  "groupTitle": "User"
},
{
  "type": "post",
  "url": "/user/remind_password",
  "title": "Update Remind password.",
  "version": "0.1.0",
  "name": "RemindPasswordUser",
  "group": "User",
  "header": {
    "fields": {
      "Header": [
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-API-KEY",
          "description": "<p>Users unique access-key.</p>"
        },
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-Token",
          "description": "<p>Users unique token.</p>"
        }
      ]
    }
  },
  "permission": [
    {
      "name": "Group Cant be Accessed permission name : api_user_update"
    }
  ],
  "parameter": {
    "fields": {
      "Parameter": [
        {
          "group": "Parameter",
          "type": "String",
          "optional": false,
          "field": "Email",
          "description": "<p>Mandatory email of Users.</p>"
        }
      ]
    }
  },
  "success": {
    "fields": {
      "Success 200": [
        {
          "group": "Success 200",
          "type": "Boolean",
          "optional": false,
          "field": "Status",
          "description": "<p>status response api.</p>"
        },
        {
          "group": "Success 200",
          "type": "String",
          "optional": false,
          "field": "Message",
          "description": "<p>message response api.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Success-Response:",
        "content": "HTTP/1.1 200 OK",
        "type": "json"
      }
    ]
  },
  "error": {
    "fields": {
      "Error 4xx": [
        {
          "group": "Error 4xx",
          "optional": false,
          "field": "ValidationError",
          "description": "<p>Error validation.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Error-Response:",
        "content": "HTTP/1.1 403 Not Acceptable",
        "type": "json"
      }
    ]
  },
  "filename": "application/controllers/api/User.php",
  "groupTitle": "User"
},
{
  "type": "post",
  "url": "/user/reset_password",
  "title": "Update Reset Password.",
  "version": "0.1.0",
  "name": "ResetPasswordUser",
  "group": "User",
  "header": {
    "fields": {
      "Header": [
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-API-KEY",
          "description": "<p>Users unique access-key.</p>"
        },
        {
          "group": "Header",
          "type": "String",
          "optional": false,
          "field": "X-Token",
          "description": "<p>Users unique token.</p>"
        }
      ]
    }
  },
  "permission": [
    {
      "name": "Group Cant be Accessed permission name : api_user_update"
    }
  ],
  "parameter": {
    "fields": {
      "Parameter": [
        {
          "group": "Parameter",
          "type": "String",
          "optional": false,
          "field": "Reset_token",
          "description": "<p>Token from e-mail.</p>"
        },
        {
          "group": "Parameter",
          "type": "String",
          "optional": false,
          "field": "password",
          "description": "<p>New password.</p>"
        },
        {
          "group": "Parameter",
          "type": "String",
          "optional": false,
          "field": "password_confirmation",
          "description": "<p>New password confirmation.</p>"
        }
      ]
    }
  },
  "success": {
    "fields": {
      "Success 200": [
        {
          "group": "Success 200",
          "type": "Boolean",
          "optional": false,
          "field": "Status",
          "description": "<p>status response api.</p>"
        },
        {
          "group": "Success 200",
          "type": "String",
          "optional": false,
          "field": "Message",
          "description": "<p>message response api.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Success-Response:",
        "content": "HTTP/1.1 200 OK",
        "type": "json"
      }
    ]
  },
  "error": {
    "fields": {
      "Error 4xx": [
        {
          "group": "Error 4xx",
          "optional": false,
          "field": "ValidationError",
          "description": "<p>Error validation.</p>"
        }
      ]
    },
    "examples": [
      {
        "title": "Error-Response:",
        "content": "HTTP/1.1 403 Not Acceptable",
        "type": "json"
      }
    ]
  },
  "filename": "application/controllers/api/User.php",
  "groupTitle": "User"
}] });
