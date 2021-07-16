/* {[The file is published on the basis of YetiForce Public License 3.0 that can be found in the following directory: licenses/LicenseEN.txt or yetiforce.com]} */
'use strict';

Vtiger_Detail_Js("Employees_Detail_Js", {
	employeeHierarchyResponseCache: {},
	triggerEmployeeHierarchy: function (HierarchyUrl) {
		Employees_Detail_Js.getEmployeeHierarchyResponseData(HierarchyUrl).done(function (data) {
			app.showModalWindow(data);
		});
	},
	getEmployeeHierarchyResponseData: function (params) {
		var aDeferred = jQuery.Deferred();
		if (!(jQuery.isEmptyObject(Employees_Detail_Js.employeeHierarchyResponseCache))) {
			aDeferred.resolve(Employees_Detail_Js.employeeHierarchyResponseCache);
		} else {
			AppConnector.request(params).done(function (data) {
				Employees_Detail_Js.employeeHierarchyResponseCache = data;
				aDeferred.resolve(Employees_Detail_Js.employeeHierarchyResponseCache);
			}).fail(function (textStatus, errorThrown) {
				aDeferred.reject(textStatus, errorThrown);
			});
		}
		return aDeferred.promise();
	}
}, {
	registerEvents: function () {
		this._super();
	}
});
